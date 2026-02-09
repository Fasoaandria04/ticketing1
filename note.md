## Intervention (Assistance)

### ITIL
* ITIL (Information Technology Infrastructure Library) est le cadre de référence le plus reconnu au monde pour la gestion des services informatiques. C est un ensemble de concepts, de meilleures pratiques, de processus et de procédures visant à aligner les services informatiques sur les besoins de l'entreprise.

### Email 

#### Fonctionnement
* Boîte aux Lettres Dédiée : L'administrateur configure une adresse e-mail spécifique pour le support (ex: support@votreentreprise.com).

* Configuration du Collecteur : Dans GLPI (via Administration > Collecteurs de courriels), vous configurez les informations de connexion (serveur IMAP/POP3, login, mot de passe) de cette boîte.

* Tâche Automatique (Cron) : GLPI utilise une tâche planifiée (automatique) pour se connecter régulièrement (toutes les 5 ou 10 minutes, par exemple) à cette boîte aux lettres. (cron veut dire chrono)

* Conversion: 
    * Lorsqu'un nouvel e-mail est trouvé, GLPI le lit.
    * Le sujet de l'e-mail devient le titre du ticket.
    * Le corps de l'e-mail devient la description.
    * L'expéditeur est identifié comme l'utilisateur demandeur (si son adresse e-mail existe déjà dans la base de données GLPI).
    * GLPI crée le nouveau ticket dans le menu Assistance.
    * Catégorie:
        * Règles de Dictionnaire : L'administrateur crée des règles de type "Si le sujet contient le mot-clé 'Imprimante' ou 'Impression', alors affecter la Catégorie 'Matériel > Imprimante'."

    * Éléments:
        * Règles par Expéditeur ou Corps : Si l'e-mail est envoyé par un utilisateur (X) et que cet utilisateur est affecté à un seul Ordinateur (PC-X) dans l'inventaire, GLPI peut lier cet ordinateur par défaut. Les règles peuvent aussi rechercher un numéro de série dans le corps de l'e-mail.

    * Type:
        * Règles de Mot-Clé : Si le sujet contient "mot de passe" ou "accès", le Type peut être défini sur "Demande". Si le sujet contient "panne" ou "coupure", le Type peut être "Incident".
    * Demandeur (Utilisateur)
        * Rempli automatiquement par l'adresse e-mail de l'expéditeur. GLPI recherche si cette adresse existe dans la table des utilisateurs.

    * Statut
        * Valeur par Défaut :	Toujours initialisé à "Nouveau" (ou "Nouveau - Attribution automatique") dès qu'il est créé par le Collecteur.
    
    * Urgence
        *  Valeur par Défaut :	Souvent initialisée à "Moyenne" par défaut pour tous les tickets créés par e-mail, car l'urgence est subjective. Les règles d'affaires peuvent ensuite l'augmenter si le sujet contient des mots comme "Urgent" ou "Bloqué".

    * Impact
        * Règles d'Affaires :	Rempli par défaut (ex: "Faible"), mais il peut être déduit. Si l'e-mail vient d'un utilisateur du groupe "Direction", l'Impact peut être augmenté à "Élevé" par une règle.
    
    * Priorité
        * Calcul Automatique :La Priorité n'est jamais saisie. Elle est toujours le résultat d'une matrice interne : $$\text{Priorité} = f(\text{Urgence}, \text{Impact})$$



* Nettoyage: Une fois le ticket créé, l'e-mail est généralement supprimé ou déplacé dans un dossier spécifique (traité) pour éviter la recréation du même ticket.


### Pourquoi utiliser un autre web service

* C' est crucial pour la fonctionnalite mode hors ligne

### Securite
* mobile - web service
    - token bearer

* web service - api GLPI
    - Tokens natifs de GLPI (App-Token et Session-Token)

Pour résumer clairement, votre architecture utilise une **stratégie de sécurité "en profondeur" (multi-couches)**. Vous ne reposez pas sur une seule barrière, mais sur plusieurs mécanismes qui se complètent.

Voici la liste complète des 5 sécurités actives dans votre projet, classées par zone d'intervention :

### 1. 🔒 Sécurité du Transport (Le Tunnel)
* **Technologie :** **HTTPS (TLS/SSL)**.
* **Où :** Sur tout le trajet (Mobile ↔ Web Service ↔ GLPI).
* **Rôle :** C'est la base absolue. Elle **chiffre** toutes les données qui transitent sur le réseau (mots de passe, tokens, rapports). Sans HTTPS, n'importe qui sur le même réseau Wi-Fi que le technicien pourrait voler le `app.jwtSecret` ou le mot de passe.

---

### 2. 📱 Sécurité Mobile ↔ Web Service (L'Accès)
* **Technologie :** **JWT (JSON Web Token)**.
* **Où :** Entre l'application Mobile et votre Spring Boot.
* **Rôle :**
    * Remplace le mot de passe du technicien après la première connexion.
    * Permet au serveur de reconnaître le technicien à chaque requête (ex: "C'est bien Pierre qui envoie ce rapport").
    * Contient une date d'expiration (`app.jwtExpirationMs`) pour limiter les risques en cas de vol du téléphone.

---

### 3. ✍️ Sécurité de l'Intégrité (La Signature)
* **Technologie :** **Algorithme HMAC-SHA512 + Clé Secrète (`app.jwtSecret`)**.
* **Où :** Au cœur du JWT.
* **Rôle :**
    * Garantit que le Jeton n'a pas été **modifié** ou **falsifié** par un pirate.
    * Si un petit malin essaie de changer son rôle de "tech" à "admin" dans le token, la signature ne correspondra plus à celle calculée avec votre clé secrète, et Spring Boot rejettera la requête.

---

### 4. ☁️ Sécurité Web Service ↔ GLPI (Le Pont)
* **Technologie :** **Authentification Native GLPI (Double Token)**.
* **Où :** Entre Spring Boot et GLPI.
* **Composant A (App-Token) :** Un jeton statique qui autorise votre application Spring Boot à parler à GLPI (empêche d'autres scripts non autorisés d'utiliser l'API).
* **Composant B (Session-Token) :** Un jeton temporaire (encapsulé dans le JWT) qui prouve à GLPI que l'action est faite *par* le technicien connecté, respectant ainsi ses permissions et profils GLPI.

---

### 5. 🛡️ Sécurité du Stockage (Le Coffre-Fort)
* **Technologie :** **Variables d'Environnement / Fichiers de Config Sécurisés**.
* **Où :** Sur le serveur hébergeant Spring Boot.
* **Rôle :**
    * Votre `app.jwtSecret`, votre `glpi.appToken` et les identifiants de base de données ne doivent jamais être écrits "en dur" dans le code Java (`.java`).
    * Ils sont stockés dans `application.properties` (ou injectés par le serveur), protégés des regards indiscrets.



[Image of secure API architecture diagram]


### En résumé :

1.  Le technicien traverse un **tunnel blindé** (HTTPS).
2.  Il montre son **badge infalsifiable** (JWT + Signature).
3.  Votre Web Service vérifie le badge avec sa **clé secrète**.
4.  Votre Web Service utilise ses **passe-partout officiels** (App-Token + Session-Token) pour entrer dans GLPI.
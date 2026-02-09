## Questions sur l'inventaire :
* **Quels sont les matériels à inventorier ?**
    - Tous les postes de travail (PC, portables).
    - Écrans et périphériques (souvent non détectés par l'agent).
    - Matériel réseau et serveurs.
    - Mobilier (si nécessaire).

* **But de l'inventaire par scan (Réconciliation physique) :**
    - **Reconciliation** : Vérifier que ce que GLPI Agent détecte est bien présent physiquement.
    - **Localisation** : Confirmer que l'ordinateur est dans la bonne pièce (l'agent ne le sait pas toujours précisément).
    - **Audit de l'utilisateur** : Vérifier que c'est bien la bonne personne qui utilise la machine.
    - **État physique** : Noter si le matériel est dégradé ou hors service.

* **Ce que le technicien vérifie concrètement lors du scan :**
    - **L'étiquette (Asset Tag)** : Est-elle présente et lisible ? Correspond-elle à `otherserial` ?
    - **L'environnement** : Le matériel est-il dans le bon bureau/service ?
    - **Les accessoires** : Présence des écrans, stations d'accueil, périphériques.
    - **L'intégrité** : Pas de dommages physiques apparents (écran fissuré, plasturgie cassée).
    - **La conformité** : Le matériel est-il utilisé pour ce quoi il a été prévu ?



### Ordinateurs : Champs et Relations

| Champ | Relation / Table | Description |
| :--- | :--- | :--- |
| **id** | - | Clé primaire |
| **name** | - | Nom de l'ordinateur |
| **entities_id** | `glpi_entities` | Entité (Filiale/Département) |
| **locations_id** | `glpi_locations` | **Lieu physique (Bureau, Salle)** |
| **computertypes_id** | `glpi_computertypes` | Type (Portable, Tour, Serveur) |
| **computermodels_id** | `glpi_computermodels` | Modèle précis (ex: Latitude 5420) |
| **manufacturers_id** | `glpi_manufacturers` | Fabricant (Dell, HP, Apple) |
| **serial** | - | Numéro de série constructeur |
| **otherserial** | - | **Numéro d'inventaire (Asset Tag)** |
| **users_id** | `glpi_users` | **Utilisateur final (Affectation)** |
| **groups_id** | `glpi_groups` | Groupe responsable |
| **states_id** | `glpi_states` | **État (En service, En stock, HS)** |
| **networks_id** | `glpi_networks` | Réseau associé |
| **users_id_tech** | `glpi_users` | Technicien responsable |
| **comment** | - | **Notes et observations** |
| **date_mod** | - | Date de dernière modification |
| **last_inventory_update** | - | Date de dernière remontée Agent |
| **uuid** | - | ID unique BIOS |

---

### Analyse pour l'application de Scan

Après avoir scanné un matériel (via `otherserial` ou `serial`), voici la répartition recommandée des champs :

#### 1. À afficher (Lecture seule)
*Pour confirmer que le technicien a le bon matériel devant lui :*
- **Nom** (`name`)
- **Numéro de série** (`serial`)
- **Numéro d'inventaire** (`otherserial`)
- **Fabricant / Modèle** (`manufacturers_id` / `computermodels_id`)
- **Dernière mise à jour agent** (`last_inventory_update`) - *Permet de voir si l'agent GLPI fonctionne toujours.*
- **Computer types** (`computertypes_id`)
- **Date de modification** (`date_mod`) 

#### 2. Champs modifiables
*Ce que le technicien doit mettre à jour physiquement :*
- **Lieu** (`locations_id`) : **Crucial** pour la réconciliation physique.
- **État** (`states_id`) : Pour signaler un matériel cassé ou à remplacer.
- **Utilisateur** (`users_id`) : Pour corriger une affectation erronée.
- **Commentaire** (`comment`) : Pour noter une remarque particulière (ex: "Clavier abîmé").

> [!NOTE]
> Les autres champs (CPU, RAM, OS) sont gérés automatiquement par **GLPI Agent** et ne devraient pas être modifiés manuellement lors d'un scan pour éviter les conflits de données.




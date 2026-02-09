<?php
class DB extends DBmysql {
   public $dbhost = '127.0.0.1';
   public $dbuser = 'glpi_user';
   public $dbpassword = 'motdepasse_glpi';
   public $dbdefault = 'essaie1';
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}


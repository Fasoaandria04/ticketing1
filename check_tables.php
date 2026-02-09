<?php
if (!defined('GLPI_ROOT')) {
    define('GLPI_ROOT', __DIR__);
}
require_once GLPI_ROOT . '/inc/includes.php';
// if Kernel not booted by includes.php
if (!isset($kernel)) {
    require_once GLPI_ROOT . '/vendor/autoload.php';
    $kernel = new Glpi\Kernel\Kernel();
    $kernel->boot();
}
global $DB;

$tables = [
    'glpi_plugin_auditinventaire_sessions',
    'glpi_plugin_auditinventaire_session_itemtypes',
    'glpi_plugin_auditinventaire_scans'
];

foreach ($tables as $table) {
    echo "--- $table ---\n";
    $res = $DB->request("DESCRIBE `$table` ");
    foreach ($res as $row) {
        printf("%-20s | %-20s | %-5s | %-5s\n", $row['Field'], $row['Type'], $row['Null'], $row['Key']);
    }
    echo "\n";
}

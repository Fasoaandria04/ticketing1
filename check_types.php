<?php
include('./inc/includes.php');

global $CFG_GLPI;

echo "--- CORE ASSETS ---\n";
// This is a common way GLPI stores asset types in older versions, or maybe simpler
if (isset($CFG_GLPI['asset_types'])) {
    print_r($CFG_GLPI['asset_types']);
}

echo "--- MENU ASSETS ---\n";
// Check if we can retrieve the menu structure
if (class_exists('Html')) {
    // Html::getMenu() is used to build the menu
    // usage might vary by version
}

echo "--- REGISTERED MAIN ITEMS ---\n";
// Sometimes stored here
if (isset($CFG_GLPI['planning_types'])) {
    // print_r($CFG_GLPI['planning_types']);
}

// Check standard classes
$types = ['Computer', 'Monitor', 'NetworkEquipment', 'Printer', 'Phone', 'Peripheral'];
foreach ($types as $type) {
    if (class_exists($type)) {
        echo "$type exists\n";
    }
}

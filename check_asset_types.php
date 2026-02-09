<?php
include('./inc/includes.php');

global $CFG_GLPI;

echo "CFG_GLPI asset_types:\n";
if (!empty($CFG_GLPI['asset_types'])) {
    var_dump($CFG_GLPI['asset_types']);
} else {
    echo "Empty or not set.\n";
    // Force init if possible or check if it's in a subkey
    // In some versions, it might be constructed on the fly
}

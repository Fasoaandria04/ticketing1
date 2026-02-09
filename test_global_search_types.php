<?php
include "inc/includes.php";

if (isset($CFG_GLPI["globalsearch_types"])) {
    echo "Global Search Types:\n";
    foreach ($CFG_GLPI["globalsearch_types"] as $type) {
        echo "- " . $type . "\n";
    }
} else {
    echo "CFG_GLPI['globalsearch_types'] is not set.\n";
}

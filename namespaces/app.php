<?php

namespace App;

include 'project.php';

use Project\Table as ProjectTable;

class Table {

    public function get()
    {
        echo "App.Table.get";
    }
}

$projectTable = new ProjectTable;
$projectTable->get();
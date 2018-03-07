<?php

require_once("pdo_connect.php");

// One plus to using PDO is that you can iterate over a query's rows using a foreach loop.
    $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    foreach ($db->query($sql) as $row) { // Note: $db was set up in pdo_connect.php which was imported above.
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
    }
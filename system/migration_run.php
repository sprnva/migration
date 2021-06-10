<?php
require_once __DIR__ . '/../bootstrap.php';

$migration = new Migration();
$commandType = $_REQUEST["command"];
$migrationName = $_REQUEST["migrationName"];

switch ($commandType) {
    case 'migration:make':
        echo $migration->make($migrationName);
        break;

    case 'migration:migrate':
        echo $migration->migrate();
        break;

    case 'migration:fresh':
        echo $migration->fresh();
        break;

    case 'schema:dump':
        echo $migration->dump();
        break;

    case 'schema:dump-prune':
        echo $migration->dump('prune');
        break;

    case 'migration:rollback':
        echo $migration->rollback();
        break;

    default:
        break;
}

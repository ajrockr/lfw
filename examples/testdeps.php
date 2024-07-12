<?php declare(strict_types=1);

use Ajrockr\PdoDbm\Factory\DatabaseFactory;
use DI\DependencyException;
use DI\NotFoundException;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dbConn = DatabaseFactory::createConnection([
        'driver' => 'sqlite',
        'path' => ':memory:'
    ]);
} catch (\Ajrockr\PdoDbm\Database\Exceptions\DatabaseConfigException|NotFoundException|DependencyException|Exception $e) {
}

<?php

require 'vendor/autoload.php';

date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');

$config = [
    'host' => getenv('ISUCON5_DB_HOST') ?: 'localhost',
    'port' => (int)getenv('ISUCON5_DB_PORT') ?: 3306,
    'username' => 'isucon',//getenv('ISUCON5_DB_USER') ?: 'root',
    'password' => 'isucon',//getenv('ISUCON5_DB_PASSWORD'),
    'database' => getenv('ISUCON5_DB_NAME') ?: 'isucon5q'
];

// DB client
$dsn = sprintf("mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4", $config['host'], $config['port'], $config['database']);
if ($config['host'] === 'localhost') $dsn .= ";unix_socket=/var/run/mysqld/mysqld.sock";
$options = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);
$db = new PDO($dsn, $config['username'], $config['password'], $options);

// redis client
$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'localhost',
    'port'   => 6379,
]);

function db_execute($query, $args = [])
{
    global $db;
    $stmt = $db->prepare($query);
    $stmt->execute($args);
    return $stmt;
}

/* 記事がプライベートかどうかをキャッシュする */
// UPDATEかからないのでINSERTのときだけキャッシュ更新すればよさげ
$entrieFlags = db_execute('SELECT id, private FROM entries')->fetchAll();
foreach ($entrieFlags as $entrieFlag) {
    $redis->set('entry:private:'.$entrieFlag['id'], $entrieFlag['private']);
}


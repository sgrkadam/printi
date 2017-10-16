<?php

require_once 'dependencies/autoload.php';
$client = new \Github\Client();
$repositories = $client->api('user')->repositories('symfony');
echo '<pre>';
print_r($repositories);
echo '</pre>';
?>
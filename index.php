<?php

require_once "config.php";
require_once "pdo.php";
require_once "template/header.php";

$res = $conn->query('SELECT id, title, description, type FROM anime');

foreach ($res->fetchAll() as $value) {
    echo "
<div class='card'>
    <div class='title'>".$value['title']."</div>
    <div class='description'>".$value['description']."</div>
    <div class='type'>".$value['type']."</div>
 </div>";
}

require_once "template/footer.php";

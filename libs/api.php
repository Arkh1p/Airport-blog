<?php

function Debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_articles(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM `blog-articles`");
    return $res->fetchAll();
}

function get_vip_halls(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM `vip-halls`");
    return $res->fetchAll();
}

function get_vip_escort(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM `vip-escort`");
    return $res->fetchAll();
}

?>
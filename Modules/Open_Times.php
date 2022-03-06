<?php
function getOpen_times()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM shophours");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Open_times" );
    return $result;
}
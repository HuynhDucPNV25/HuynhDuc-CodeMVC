<?php
require 'database.php';
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);

    header('Location: /post');
}
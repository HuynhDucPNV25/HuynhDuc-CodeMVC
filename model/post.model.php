<?php
require_once dirname(dirname(__FILE__)) ."/database/database.php";
function post_insert($title, $description){
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $_POST['title'],
        ':description' =>  $_POST['description']
    ]);
}
function post_get_all(){
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    $posts = $statement->fetchAll();
    return $posts;
}
function post_get($id){
    global $connection;
    $statement = $connection->prepare('select * from posts where id = :id');
    $statement->execute([':id' => $id]);
    $post = $statement->fetch();
    return $post;
}
function post_detele($id){
    global $connection;

    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);

}
function post_update($title, $description, $id){
    global $connection;

    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':id' => $_POST['id']

    ]);
}
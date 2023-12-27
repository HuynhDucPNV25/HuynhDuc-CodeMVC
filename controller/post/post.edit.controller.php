<?php
require_once dirname(dirname(__DIR__)) ."/model/post.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {

        post_update($_POST['title'], $_POST['description'], $id);
        header('location: /start-code/post');
    }
}else{
    require dirname(dirname(__DIR__)) . "/views/post/post.edit.view.php";
}

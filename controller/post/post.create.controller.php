<?php
require_once dirname(dirname(__DIR__)) ."/model/post.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) && !empty($_POST['description'])) {

        post_insert($_POST['title'], $_POST['description']);
        header('location: /start-code/post');
    }
}else{
    require dirname(dirname(__DIR__)) . "/views/post/post.create.view.php";

}

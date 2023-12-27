<?php
require_once dirname(dirname(__DIR__)) . '/model/post.model.php';

$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id)) {
    post_detele($id);
    header('Location: /start-code/post');
}
<?php

$heading = "Post Page";

$statement = $connection->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll();

require "partials/head.php"; 
require "partials/nav.php" ;
?>

  <a href="post.create.php" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="post.delete.php?id=<?= $post['id'] ?>" >Delete</a> |
        <a href="post.edit.php?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>

<?php require "partials/footer.php" ?>
<?php require "partials/head.php"?>
    <h1>About Page</h1>
    <?php if(!empty($articles)){?>
        <?php foreach ($articles as $article): ?>
        <h2><?= $article['title']?></h2>
        <h2><?= $article['author'] ?></h2>
        <?php  endforeach;?>
    <?php }?>
<?php require "partials/footer.php";

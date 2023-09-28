<?php require 'App/Views/partials/head.php'?>
<h1>All Articles</h1>
<?php foreach ($articles as $article): ?>
<h1><a href="/article?id=<?=$article['id']?>"><?= $article['name']?></a></h1>
<p><?= $article['body']?></p>
<a href="/article/edit?id=<?=$article['id']?>"> Edit </a>
<form method="post" action="/article/delete?id=<?=$article['id']?>">
    <button type="submit">Delete</button>
</form>
<?php endforeach; ?>
<?php require 'App/Views/partials/footer.php'?>


<?php  require "App/Views/partials/head.php" ?>
<h1>Create Articles</h1>
<form method="post" action="/articles/store">
    <div>
       <input name="name" type="text"><br>
        <input type="text" name="body"><br>
    </div>
    <button type="submit">Create</button>
</form>
<?php require "App/Views/partials/footer.php" ?>


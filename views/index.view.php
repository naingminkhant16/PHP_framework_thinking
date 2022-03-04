<?php
require "views/partials/header.php";
?>
<h4>Usernames</h4>
<ol>
    <form action="/frameworkthinking/index.php/delete" method="POST">
        <?php foreach ($users as $user) : ?>
            <li><input type="checkbox" name="<?= $user->name ?>" value="<?= $user->id ?>"><?= $user->name ?></li>
        <?php endforeach; ?>
        <button type="submit">Delete</button>
    </form>
</ol>

<h4>Enter your name.</h4>
<form action="/frameworkthinking/index.php/names" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'views/partials/footer.php'; ?>
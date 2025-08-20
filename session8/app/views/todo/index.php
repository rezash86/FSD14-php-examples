<h2>Todo List <h2>

<ul class="list-group">
    <?php foreach($tasks as $task): ?>
        <li class="list-group-item"><?= htmlspecialchars($task['task']) ?></li>
    <?php endforeach; ?>
</ul>

<a href="<?= BASE_URL ?>/?page=logout">Logout</a>
<?php include __DIR__.'/../layouts/main.php' ?>


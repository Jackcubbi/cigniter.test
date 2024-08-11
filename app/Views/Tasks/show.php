<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?><?= $task['title'] ?><?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Task details:</h1>
<p>ID: <?= $task['id'] ?></p>
<p>Title: <?= esc($task['title']) ?></p>
<p>Description: <?= esc($task['description']) ?></p>
<p>Created At: <?= esc($task['created_at']) ?></p>
<?= $this->endSection() ?>
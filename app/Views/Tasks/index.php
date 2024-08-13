<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?> Task list <?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Hello task list</h1>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <a href="<?= site_url("/tasks/" . $task['id']) ?>">
        <?= esc($task['title']) ?>
      </a>
      <?= esc($task['description']) ?>
      <?= esc($task['created_at']) ?>
      <a href="<?= site_url("/tasks/edit/" . $task['id']) ?>">edit</a>
    </li>
  <?php endforeach; ?>


</ul>
<?= $this->endSection() ?>
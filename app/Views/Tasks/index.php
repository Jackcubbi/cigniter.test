<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?> Task list <?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Hello task list</h1>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <a href="<?= site_url("/tasks/" . $task['id']) ?>">
        <?= $task['title'] ?>
      </a>
      <?= $task['description'] ?>
      <?= $task['created_at'] ?>
    </li>
  <?php endforeach; ?>


</ul>
<?= $this->endSection() ?>
<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?> Task list <?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Hello task list</h1>

<div class="form-container">

  <ul class="task-list">
    <?php foreach ($tasks as $task) : ?>
      <li>
        <div class="task-box">
          <div class="task-left">
            <a href="<?= site_url("/tasks/" . $task->id) ?>">
              <?= esc($task->title) ?>
            </a>
            <p><?= esc($task->description) ?></p>
            <?= esc($task->created_at) ?>
          </div>
          <div class="task-right">
            <div class="edit-delete">
              <a class="edit-task-btn" href="<?= site_url("/tasks/edit/" . $task->id) ?>">edit</a>
              <a class="edit-task-btn" href="<?= site_url("/tasks/delete/" . $task->id) ?>">delete</a>
            </div>
          </div>

        </div>
      </li>
    <?php endforeach; ?>


  </ul>
</div>
<?= $this->endSection() ?>
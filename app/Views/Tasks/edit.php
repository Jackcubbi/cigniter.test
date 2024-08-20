<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?><?= $task->title ?><?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Task Edit:</h1>

<?php if (session()->has('errors')): ?>

  <ul>
    <?php foreach (session('errors') as $item): ?>
      <li><?= $item; ?></li>
    <?php endforeach; ?>
  </ul>


<?php endif; ?>

<?= form_open('tasks/update/' . $task->id) ?>

<div class="form-container">
  <div class="row">
    <div class="col-25">
      <label for="title">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" value="<?= old('title', isset($task->title) ? $task->title : '') ?>" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px" required><?= old('description', isset($task->description) ? $task->description : '') ?></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="created_at">Created at</label>
    </div>
    <div class="col-75">
      <input type="datetime-local" id="created_at" name="created_at" value="<?= old('created_at', isset($task->created_at) ? $task->created_at : '') ?>" required>
    </div>
  </div>

  <br>
  <div class="row">
    <input type="submit" value="Сохранить задание">
  </div>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>
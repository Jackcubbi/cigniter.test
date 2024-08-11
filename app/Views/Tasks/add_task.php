<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?>Add new task><?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Add task</h1>

<?= form_open('tasks/store') ?>

<div class="form-container">
  <div class="row">
    <div class="col-25">
      <label for="title">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="created_at">Created at</label>
    </div>
    <div class="col-75">
      <input type="datetime-local" id="created_at" name="created_at">
    </div>
  </div>

  <br>
  <div class="row">
    <input type="submit" value="Add new task">
  </div>
</div>

<?= form_close() ?>

<?= $this->endSection() ?>
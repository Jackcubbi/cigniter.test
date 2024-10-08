<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?>Add new task><?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>User registration</h1>

<?php if (session()->has('errors')): ?>

  <ul>
    <?php foreach (session('errors') as $item): ?>
      <li><?= $item; ?></li>
    <?php endforeach; ?>
  </ul>


<?php endif; ?>

<?= form_open('/signup/store') ?>

<div class="form-container">
  <div class="row">
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" id="name">

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" id="email">

    <label for="password"><b>Password</b></label>
    <input type="password" name="password" id="password">

    <label for="password_repeat"><b>Repeat Password</b></label>
    <input type="password" name="password_repeat" id="password_repeat">
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>

  <br>
  <div class="row">
    <input type="submit" class="register_btn" value="Registration">
  </div>
</div>

<?= form_close() ?>

<?= $this->endSection() ?>
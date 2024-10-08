<?= $this->extend("layouts/head") ?>

<?= $this->section("title") ?> Homepage title <?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Homepage</h1>
<hr>
<a href="<?= site_url('/signup/new') ?>">Registration</a>
<?= $this->endSection() ?>
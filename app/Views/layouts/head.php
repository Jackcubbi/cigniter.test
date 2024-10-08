<!doctype html>
<html>

<head>
  <title><?= $this->renderSection('title') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
  * {
    box-sizing: border-box;
  }

  input[type=text],
  input[type=password],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .form-container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    max-width: 800px;
    margin: auto;
  }

  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row::after {
    content: "";
    display: table;
    clear: both;
  }

  ul.task-list {
    list-style: none;
    padding: 0;

    li {
      margin-bottom: 1rem;
      border-bottom: 1px solid #ccc;
      padding: .5rem 0;

      .task-box {
        display: flex;
        justify-content: space-between;

        .task-left {
          flex-basis: 85%;
        }

        .edit-delete {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          text-align: right;
          height: 100%;
        }
      }

      .edit-task-btn {
        float: right;
      }
    }
  }
</style>

<body>
  <?= view('layouts/header'); ?>
  <?= $this->renderSection('content') ?>
</body>

</html>
<?= $this->extend('layouts/default') ?>

<?= $this->section('title')?>Delete task<?= $this->endSection()?>

<?= $this->section('content')?>

<h1>Delete Task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button>yes</button>
    <a href="<?= site_url('/tasks/show/'. $task->id)?>">Cancel</a>

</from>

<?= $this->endSection()?>
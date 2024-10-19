<?= $this->extend('layouts/default') ?>

<?= $this->section('title')?>Eliminar Usuario<?= $this->endSection()?>

<?= $this->section('content')?>

<h1>Eliminar Usuario</h1>

<p>Are you sure?</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <button>yes</button>
    <a href="<?= site_url('/admin/users/show/'. $user->id)?>">Cancel</a>

</from>

<?= $this->endSection()?>
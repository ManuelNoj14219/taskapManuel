<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>User<?= $this->endSection() ?>

<?= $this->section('content')?>

<h1>Usuario</h1>

<a href="<?= site_url("/admin/users")?>">&laquo; back to index</a>

<dl>
    <dt>Nombre</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>

    <dt>Administrador</dt>
    <dd><?= $user->is_admin ? 'SI':'NO' ?></dd>

    <dt>Created at</dt>
    <dd><?= $user->created_at ?></dd>

    <dt>Updated at</dt>
    <dd><?= $user->updated_at ?></dd>
</dl>

<a href="<?= site_url('/admin/users/edit/' . $user->id)?>">Edit</a>

<?php if ($user->id != current_user()->id): ?>

    <a href="<?= site_url('/admin/users/delete/'. $user->id)?>">Deleted</a>
    
<?php endif; ?>

<?= $this->endSection() ?>
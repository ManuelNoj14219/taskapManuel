<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Editar Usuario</h1>

<?php if (session() ->has('errors')):?>

    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id) ?>

    <?= $this->include('Admin/Users/forms')?>
    <button>Save</button>
    <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">Cancel</a>

</form>

<?= $this->endSection() ?>
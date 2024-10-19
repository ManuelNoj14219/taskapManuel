<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Usuarios<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Bienvenidos Usuarios</h1>

    <a href="<?= site_url("/admin/users/new") ?>">New user</a>

    <?php if ($user): ?>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>Administrador</th>
                    <th>Creado a</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $user): ?>
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id )?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_admin ? 'SI':'NO' ?></td>
                        <td><?= $user->created_at ?></td>   
                    </tr>
            <?php endforeach; ?>
            </tbody>
            </table>

    <?= $pager->simpleLinks() ?>

    <?php else:?>

        <p>No usuarios</p>

    <?php endif;?>

<?= $this->endSection() ?>
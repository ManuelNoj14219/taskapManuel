<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>holis desde Tasks</h1>

    <a href="<?= site_url("/tasks/new") ?>">New task</a>

    <?php if ($task): ?>

        <ul>
            <?php foreach($task as $task): ?>
                <li>
                    <a href="<?= site_url("/tasks/show/" . $task->id )?>">
                        <?= esc($task->description) ?>
                    </a>   
                </li>
            <?php endforeach; ?>
        </ul>

    <?= $pager->simpleLinks() ?>

    <?php else:?>

        <p>NO tasks found</p>

    <?php endif;?>

<?= $this->endSection() ?>

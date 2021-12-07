<!--used to extend a layout section -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>
    Welcome
</h1>


    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?= $task['id'] ?>
                <?= $task['description'] ?>
            </li>
        <?php endforeach ?>    
    </ul>

<?= $this->endSection() ?>
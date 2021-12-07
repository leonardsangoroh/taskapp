<!--used to extend a layout section -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>
    Tasks
</h1>

<a href="<?= site_url('/tasks/new') ?>"> New task</a>


    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?= $task['id'] ?>
                <?= $task['description'] ?>
            </li>
        <?php endforeach ?>    
    </ul>

<?= $this->endSection() ?>
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Edit Task</h1>

    <?php if (session()->has('errors')): ?>
        <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif ?>

<?= form_open('/tasks/update/'.$task['id']) ?>
    <div>
        <label for="descrioption">Description</label>
        <input type="text" name="description" id="description"
                           value="<?= old('description',esc($task['description']) )?>">
    </div>

    <button>Save</button>

    <a href="<?= site_url("/tasks/show/".$task['id']) ?>"> Cancel</a>
</form>

<?= $this->endSection() ?>
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Add Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= form_open('/tasks/create') ?>
    <div>
        <label for="descrioption">Description</label>
        <input type="text" name="description" id="description" value="">
    </div>

    <button>Save</button>

    <a href="<?= site_url("/tasks") ?>"> Cancel</a>
</form>

<?= $this->endSection() ?>
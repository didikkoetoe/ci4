<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h2 class="text-center">Halaman Page</h2>
    <?php foreach ($alamat as $a) : ?>
        <ul>
            <li><?= $a['tipe']; ?></li>
            <li><?= $a['alamat']; ?></li>
            <li><?= $a['provinsi']; ?></li>
        </ul>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <a href="/Buku/create" class="btn btn-primary float-end">Tambah Data</a>
    <h2 class="text-center mb-3">Daftar Buku</h2>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <table class="table table-striped border mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($buku as $book) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src="/img/<?= $book['sampul']; ?>" alt="" class="sampul">
                    </td>
                    <td><?= $book['judul']; ?></td>
                    <td>
                        <a href="buku/<?= $book['slug']; ?>" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
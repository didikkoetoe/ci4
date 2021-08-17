<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h2 class="text-center">Daftar Buku</h2>
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
                        <a href="Buku/<?= $book['slug']; ?>" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/<?= $buku['sampul']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul']; ?></h5>
                    <p class="card-text"><?= $buku['penulis']; ?></p>
                    <p class="card-text">Penerbit : <?= $buku['penerbit']; ?></p>
                    <a href="/Buku/hapus/<?= $buku['slug']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="/Buku/edit/<?= $buku['slug']; ?>" class="btn btn-warning">Edit</a>
                    <br><br>
                    <a href="/Buku" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
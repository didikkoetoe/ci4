<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <h2 class="text-center">Tambah Buku</h2>
    <hr>
    <form action="/Buku/save" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" autofocus>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control">
        </div>
        <div class="mb-3">
            <label for="sampul" class="form-label">Sampul</label>
            <input type="text" name="sampul" id="sampul" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<?= $this->endSection(); ?>
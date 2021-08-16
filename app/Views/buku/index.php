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
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="/img/atomic.jpg" alt="" class="sampul">
                </td>
                <td>Atomic Habit</td>
                <td>
                    <a href="" class="btn btn-success">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
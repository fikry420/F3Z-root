<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1>Data Pengadaan Barang Olahraga</h1>
<a href="<?= base_url('pengadaan/create') ?>" class="btn btn-primary">Tambah Pengadaan</a>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Id Pengadaan</th>
            <th>Nama Barang</th>
            <th>Nama Supplier</th>
            <th>Nama Role</th>
            <th>Jumlah</th>
            <th>Waktu</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengadaan as $p) : ?>
            <tr>
                <td><?= $p['IdPengadaan'] ?></td>
                <td><?= $p['nama_barang'] ?></td>
                <td><?= $p['nama_supplier'] ?></td>
                <td><?= $p['nama_role'] ?></td>
                <td><?= $p['jumlah'] ?></td>
                <td><?= $p['waktu'] ?></td>
                <td><?= $p['keterangan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>

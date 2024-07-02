<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1>Daftar Barang Olahraga</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Jenis Alat</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($BarangModel) && !empty($barang)): ?>
            <?php foreach ($barang as $index => $item): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $item['nama_barang'] ?></td>
                    <td><?= $item['jumlah_barang'] ?></td>
                    <td><?= $item['Jenis'] ?></td>
                    <td><?= $item['keterangan'] ?></td>
                    <td>
                        <a href="<?= base_url('barang/barangedit/' . $item['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('barang/delete/' . $item['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Tidak ada data barang.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<br>
<a href="<?= base_url('barang/Btambah') ?>" class="btn btn-primary">Tambah Barang</a>
<?= $this->endSection() ?>

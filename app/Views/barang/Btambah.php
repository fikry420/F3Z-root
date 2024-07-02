<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1>Tambah Barang Olahraga</h1>
<form action="<?= base_url('barang/store') ?>" method="post">
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
    </div>
    <div class="mb-3">
        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="IdJenis" class="form-label">Jenis Alat</label>
        <select class="form-select" id="IdJenis" name="IdJenis" required>
            <?php foreach ($Jenis as $item): ?>
                <option value="<?= $item['IdJenis'] ?>"><?= $item['Jenis'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<?= $this->endSection() ?>

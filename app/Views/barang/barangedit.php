<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1>Edit Barang Olahraga</h1>
<form action="<?= base_url('barang/update/' . $barang['id']) ?>" method="post">
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?= $barang['jumlah_barang'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $barang['keterangan'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="jenis_id" class="form-label">Jenis Alat</label>
        <select class="form-select" id="jenis_id" name="jenis_id" required>
            <?php foreach ($jenis_alat as $jenis): ?>
                <option value="<?= $jenis['id'] ?>" <?= $jenis['id'] == $barang['jenis_id'] ? 'selected' : '' ?>><?= $jenis['nama_jenis'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>

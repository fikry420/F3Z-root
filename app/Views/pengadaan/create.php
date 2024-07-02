<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1>Tambah Pengadaan Barang Olahraga</h1>
<form action="<?= base_url('pengadaan/store') ?>" method="post">
    <div class="mb-3">
        <label for="IdBarang" class="form-label">Nama Barang</label>
        <select name="IdBarang" id="IdBarang" class="form-control">
            <?php foreach ($barang as $b) : ?>
                <option value="<?= $b['IdBarang'] ?>"><?= $b['nama_barang'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="IdSupplier" class="form-label">Nama Supplier</label>
        <select name="IdSupplier" id="IdSupplier" class="form-control">
            <?php foreach ($supplier as $s) : ?>
                <option value="<?= $s['IdSupplier'] ?>"><?= $s['nama_supplier'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="IdRole" class="form-label">Nama Role</label>
        <select name="IdRole" id="IdRole" class="form-control">
            <?php foreach ($role as $r) : ?>
                <option value="<?= $r['IdRole'] ?>"><?= $r['nama_role'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="waktu" class="form-label">Waktu</label>
        <input type="datetime-local" name="waktu" id="waktu" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<?= $this->endSection() ?>

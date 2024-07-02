<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg">
        <h1>Barang</h1>
        <br>
        <a href="<?= base_url('add_data_barang') ?>" class="btn btn-primary">Tambah Data Barang</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($all_data_barang) && !empty($all_data_barang)): ?>
                    <?php foreach ($all_data_barang as $barang) : ?>
                        <tr>
                            <td><?= $barang->idBarang ?></td>
                            <td><?= $barang->namaBarang ?></td>
                            <td><?= $barang->jumlahBarang ?></td>
                            <td><?= $barang->keterangan ?></td>
                            <td>
                                <a href="<?= base_url('edit_data_barang/'.$barang->idBarang) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('delete_data_barang/'.$barang->idBarang) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

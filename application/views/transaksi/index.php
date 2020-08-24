<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- <div class="alert alert-success" role="alert">
        Data Masa Bakti berhasil ditambahkan!
    </div> -->

    <a class="btn btn-primary mb-3" href="<?= base_url('transaksi/tambah') ?>">Tambah Masa Bakti</a>


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Cabor</th>
                <th>Email</th>
                <th>No SK</th>
                <th>Tgl SK</th>
                <th>Tgl Kadaluarsa</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tr>
            <td>C-0001</td>
            <td>PERCASI BANTEN</td>
            <td>percasi_banten@gmail.com</td>
            <td>12001001</td>
            <td>30/11/2012</td>
            <td>30/11/2016</td>
            <td>Kadaluarsa</td>
            <td>
                <a href="<?= base_url('transaksi/detail') ?>" class="badge badge-success">detail</a>
                <a href="" class="badge badge-primary">edit</a>
                <a href="" class="badge badge-danger">email</a>
            </td>
        </tr>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
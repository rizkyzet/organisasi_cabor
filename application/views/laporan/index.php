<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <form class="form-inline mb-3" action="<?= base_url('laporan/cetak') ?>" method="POST">

        <select name="" id="" class="form-control">
            <option value="">Pilih Status</option>
            <option value="">Aktif</option>
            <option value="">Kadaluarsa</option>
        </select>

        <button type="submit" class="btn btn-primary ml-2">Cetak</button>
    </form>
    <div class="overflow-auto">

        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Cabor</th>
                    <th>Nama Cabor</th>
                    <th>ID Pengurus</th>
                    <th>Nama Pengurus</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Jabatan</th>
                    <th>No. SK</th>
                    <th>Tanggal SK</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>C-0001</td>
                    <td>PERCASI BANTEN</td>
                    <td>1</td>
                    <td>Edi Iriyanto</td>
                    <td>Pandeglang, Banten</td>
                    <td>089621872267</td>
                    <td>Ketua</td>
                    <td>12001001</td>
                    <td>30/11/2012</td>
                    <td>30/11/2016</td>
                    <td>Kadaluarsa</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>C-0001</td>
                    <td>PERCASI BANTEN</td>
                    <td>2</td>
                    <td>Andi</td>
                    <td>Cilegon, Banten</td>
                    <td>089621872222</td>
                    <td>Sekum</td>
                    <td>12001001</td>
                    <td>30/11/2012</td>
                    <td>30/11/2016</td>
                    <td>Kadaluarsa</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
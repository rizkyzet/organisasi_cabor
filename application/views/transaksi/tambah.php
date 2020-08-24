<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Tambah Masa Bakti
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Cabor</label>
                        <select name="id_cabor" id="id_cabor" class="form-control">
                            <option value="1">Pencak Silat Banten</option>
                            <option value="2">PBSI Banten</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal SK</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No. Sk</label>
                        <input type="text" class="form-control">
                    </div>
                    <hr>

                    <div class="pengurus">
                        <div class="pengurus_row form-group  d-flex flex-row" id="1">


                            <select name="id_pengurus[]" id="id_pengurus" class="form-control">
                                <option value="">Pilih Pengurus</option>
                                <?php foreach ($pengurus as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama_pengurus'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="id_jabatan[]" id="id_pengurus" class="form-control ml-2">
                                <option value="">Pilih Jabatan</option>
                                <?php foreach ($jabatan as $j) : ?>
                                    <option value="<?= $j['id'] ?>"><?= $j['jabatan'] ?></option>
                                <?php endforeach; ?>

                            </select>
                            <button data-toggle="tooltip" title="Hapus" data-placement="bottom" type="button" class="btn btn-sm btn-danger ml-2 btn_hapus" disabled=true id="1">
                                <i class="fas fa-times"></i>
                            </button>

                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-8 shadow mb-3 text-center">
                            <button data-toggle="tooltip" title="Tambah" data-placement="bottom" type="button" id="btn_tambah" class="btn btn-sm btn-primary btn-circle btn_tambah">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
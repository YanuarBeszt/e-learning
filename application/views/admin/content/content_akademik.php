<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <!-- card-header -->
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-door-open mr-1"></i>
                            Tambah Akademik
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama_akademik">Nama Akademik</label>
                                            <input type="text" class="form-control" name="nama_akademik" id="nama_akademik" placeholder="Nama Akademik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="kode_akademik">Kode Akademik</label>
                                            <input type="text" class="form-control" name="kode_akademik" id="kode_akademik" placeholder="Kode Akademik">
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="margin-top: 32px;">
                                        <button type="submit" id="btn_save_akademik" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Akademik</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataAkademik" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Akademik</th>
                                    <th>Kode Akademik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data_akademik">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Akademik</th>
                                    <th>Kode Akademik</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>


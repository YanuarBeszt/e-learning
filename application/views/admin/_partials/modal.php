<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- MODAL KELAS EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="editKelas" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKelas">Edit Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Id Kelas</label>
                        <div class="col-md-10">
                            <input type="text" name="id_kelas_edit" id="id_kelas_edit" class="form-control" placeholder="Id Kelas" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Kelas</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_kelas_edit" id="nama_kelas_edit" class="form-control" placeholder="Nama Kelas">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL KELAS EDIT-->

<!-- MODAL AKADEMIK EDIT -->
<form>
    <div class="modal fade" id="Modal_Akademik_Edit" tabindex="-1" role="dialog" aria-labelledby="editAkademik" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAkademik">Edit Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Id Akademik</label>
                        <div class="col-md-10">
                            <input type="text" name="id_akademik_edit" id="id_akademik_edit" class="form-control" placeholder="Id Akademik" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Akademik</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_akademik_edit" id="nama_akademik_edit" class="form-control" placeholder="Nama Akademik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kode Akademik</label>
                        <div class="col-md-10">
                            <input type="text" name="kode_akademik_edit" id="kode_akademik_edit" class="form-control" placeholder="Kode Akademik">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_akademik_update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL AKADEMIK EDIT-->


<!--MODAL Kelas DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apakah anda ingin menghapus data?</span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_kelas_delete" id="id_kelas_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Iya</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL Kelas DELETE-->

<!--MODAL AKADEMIK DELETE-->
<form>
    <div class="modal fade" id="Modal_Akademik_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apakah anda ingin menghapus data?</span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_akademik_delete" id="id_akademik_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_delete_akademik" class="btn btn-primary">Iya</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL AKADEMIK DELETE-->


<!--MODAL tambah pendidik -->
<form>
    <div class="modal fade" id="tambahPendidik">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-10">
                            <input type="text" name="NIP" id="NIP" class="form-control" placeholder="Nomor Induk Pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Pendidik</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_pendidik" id="nama_pendidik" class="form-control" placeholder="Nama Pendidik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Email Pendidik</label>
                        <div class="col-md-10">
                            <input type="email" name="email_pendidik" id="email_pendidik" class="form-control" placeholder="Email Pendidik">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_simpanPendidik" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>
<!--END MODAL tambah pendidik-->

<!--MODAL edit pendidik -->
<form>
    <div class="modal fade" id="Modal_pendidik_Edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-10">
                            <input type="text" name="NIP_edit" id="NIP_edit" class="form-control" placeholder="Nomor Induk Pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Pendidik</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_pendidik_edit" id="nama_pendidik_edit" class="form-control" placeholder="Nama Pendidik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Email Pendidik</label>
                        <div class="col-md-10">
                            <input type="email" name="email_pendidik_edit" id="email_pendidik_edit" class="form-control" placeholder="Email Pendidik">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id_pendidik_edit" id="id_pendidik_edit" class="form-control" readonly>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_pendidik_update" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>
<!--END MODAL edit pendidik-->


<!--MODAL Pendidik DELETE-->
<form>
    <div class="modal fade" id="Modal_Pendidik_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pendidik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apakah anda ingin menghapus data?</span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_pendidik_delete" id="id_pendidik_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_delete_pendidik" class="btn btn-primary">Iya</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL Pendidik DELETE-->
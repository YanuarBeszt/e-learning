<script src="<?= base_url('/assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('/assets') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('/assets') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('/assets') ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('/assets') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('/assets') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('/assets') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('/assets') ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/assets') ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('/assets') ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/assets') ?>/dist/js/demo.js"></script>

<!-- page script -->
<script>
    $(function() {
        $("#dataKelas").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        show_kelas(); //call function show all kelas

        $('#dataKelas').dataTable();

        //function show all kelas
        function show_kelas() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('Admin/Kelas/kelas_data') ?>',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var number = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + number + '</td>' +
                            '<td>' + data[i].nama_kelas + '</td>' +
                            '<td>' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_kelas="' + data[i].id_kelas + '" data-nama_kelas="' + data[i].nama_kelas + '"><i class="fas fa-edit"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_kelas="' + data[i].id_kelas + '"><i class="fas fa-trash"></i></a>' +
                            '</td>' +
                            '</tr>';
                        number++;
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save kelas
        $('#btn_save').on('click', function() {
            var nama_kelas = $('#nama_kelas').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Admin/Kelas/save') ?>",
                dataType: "JSON",
                data: {
                    nama_kelas: nama_kelas
                },
                success: function(data) {
                    $('[name="nama_kelas"]').val("");
                    show_kelas();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var id_kelas = $(this).data('id_kelas');
            var nama_kelas = $(this).data('nama_kelas');

            $('#Modal_Edit').modal('show');
            $('[name="id_kelas_edit"]').val(id_kelas);
            $('[name="nama_kelas_edit"]').val(nama_kelas);
        });

        //update record to database
        $('#btn_update').on('click', function(event) {
            event.preventDefault();
            var id_kelas = $('#id_kelas_edit').val();
            var nama_kelas = $('#nama_kelas_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/Kelas/update') ?>",
                dataType: "JSON",
                data: {
                    id_kelas_edit: id_kelas,
                    nama_kelas_edit: nama_kelas
                },
                success: function(data) {
                    $('[name="id_kelas_edit"]').val("");
                    $('[name="nama_kelas_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_kelas();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var id_kelas = $(this).data('id_kelas');

            $('#Modal_Delete').modal('show');
            $('[name="id_kelas_delete"]').val(id_kelas);
        });

        //delete record to database
        $('#btn_delete').on('click', function() {
            var id_kelas = $('#id_kelas_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Admin/Kelas/delete') ?>",
                dataType: "JSON",
                data: {
                    id_kelas: id_kelas
                },
                success: function(data) {
                    $('[name="id_kelas_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_kelas();
                }
            });
            return false;
        });

    });
</script>
</body>
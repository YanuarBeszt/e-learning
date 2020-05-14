<script type="text/javascript">
    $(document).ready(function() {

        $('#dataAkademik').dataTable();
        show_akademik(); //call function show all akademik

        //function show all akademik
        function show_akademik() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('Admin/Akademik/akademik_data') ?>',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var number = 1;
                    if (data.length === 0) {
                        html += '<td valign="top" colspan="4" class="dataTables_empty">Data Kosong!</td>'
                    }
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + number + '</td>' +
                            '<td>' + data[i].nama_akademik + '</td>' +
                            '<td>' + data[i].kode_akademik + '</td>' +
                            '<td>' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_akademik="' + data[i].id_akademik + '" data-nama_akademik="' + data[i].nama_akademik + '" data-kode_akademik="' + data[i].kode_akademik + '"><i class="fas fa-edit"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_akademik="' + data[i].id_akademik + '"><i class="fas fa-trash"></i></a>' +
                            '</td>' +
                            '</tr>';
                        number++;
                    }
                    $('#show_data_akademik').html(html);
                }

            });
        }

        //Save Akademik
        $('#btn_save_akademik').on('click', function() {
            var nama_akademik = $('#nama_akademik').val();
            var kode_akademik = $('#kode_akademik').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/Akademik/save') ?>",
                dataType: "JSON",
                data: {
                    nama_akademik: nama_akademik,
                    kode_akademik: kode_akademik
                },
                success: function(data) {
                    $('[name="save_nama_akademik"]').val("");
                    $('[name="save_kode_akademik"]').val("");
                show_akademik();
                },
            });
            return false;
        });


        //get data for update record Akademik
        $('#show_data_akademik').on('click', '.item_edit', function() {
            var id_akademik = $(this).data('id_akademik');
            var nama_akademik = $(this).data('nama_akademik');
            var kode_akademik = $(this).data('kode_akademik');

            $('#Modal_Akademik_Edit').modal('show');
            $('[name="id_akademik_edit"]').val(id_akademik);
            $('[name="nama_akademik_edit"]').val(nama_akademik);
            $('[name="kode_akademik_edit"]').val(kode_akademik);
        });

        //update record to database
        $('#btn_akademik_update').on('click', function(event) {
            event.preventDefault();
            var id_akademik = $('#id_akademik_edit').val();
            var nama_akademik = $('#nama_akademik_edit').val();
            var kode_akademik = $('#kode_akademik_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/Akademik/update') ?>",
                dataType: "JSON",
                data: {
                    id_akademik_edit: id_akademik,
                    nama_akademik_edit: nama_akademik,
                    kode_akademik_edit: kode_akademik
                },
                success: function(data) {
                    $('[name="id_akademik_edit"]').val("");
                    $('[name="nama_akademik_edit"]').val("");
                    $('[name="kode_akademik_edit"]').val("");
                    $('#Modal_Akademik_Edit').modal('hide');
                    show_akademik();
                }
            });
            return false;
        });

        //get data for delete record Akademik
        $('#show_data_akademik').on('click', '.item_delete', function() {
            var id_akademik = $(this).data('id_akademik');

            $('#Modal_Akademik_Delete').modal('show');
            $('[name="id_akademik_delete"]').val(id_akademik);
        });

        //delete record to database
        $('#btn_delete_akademik').on('click', function() {
            var id_akademik = $('#id_akademik_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Admin/Akademik/delete') ?>",
                dataType: "JSON",
                data: {
                    id_akademik: id_akademik
                },
                success: function(data) {
                    $('[name="id_akademik_delete"]').val("");
                    $('#Modal_Akademik_Delete').modal('hide');
                    show_akademik();
                }
            });
            return false;
        });
        
</script>
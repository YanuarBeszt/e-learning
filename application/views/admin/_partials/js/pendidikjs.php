<script type="text/javascript">
    $(document).ready(function() {

        $('#datapendidik').dataTable();
        show_pendidik(); //call function show all pendidik

        //function show all pendidik
        function show_pendidik() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('Admin/Pendidik/pendidik_data') ?>',
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
                            '<td>' + data[i].NIP + '</td>' +
                            '<td>' + data[i].nama_pendidik + '</td>' +
                            '<td>' + data[i].email_pendidik + '</td>' +
                            '<td>' + data[i].username_pendidik + '</td>' +
                            '<td>' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_pendidik="' + data[i].id_pendidik + '" data-nama_pendidik="' + data[i].nama_pendidik + '" data-nip="' + data[i].NIP + '" data-email_pendidik="' + data[i].email_pendidik + '" data-username_pendidik="' + data[i].username_pendidik + '"><i class="fas fa-edit"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_pendidik="' + data[i].id_pendidik + '"><i class="fas fa-trash"></i></a>' +
                            '</td>' +
                            '</tr>';
                        number++;
                    }
                    $('#show_data_pendidik').html(html);
                }

            });
        }

        //get data for update record pendidik
        $('#show_data_pendidik').on('click', '.item_edit', function() {
            var id_pendidik = $(this).data('id_pendidik');
            var nama_pendidik = $(this).data('nama_pendidik');
            var NIP = $(this).data('nip');
            var email_pendidik = $(this).data('email_pendidik');

            $('#Modal_pendidik_Edit').modal('show');
            $('[name="id_pendidik_edit"]').val(id_pendidik);
            $('[name="nama_pendidik_edit"]').val(nama_pendidik);
            $('[name="NIP_edit"]').val(NIP);
            $('[name="email_pendidik_edit"]').val(email_pendidik);
        });

        //update record to database
        $('#btn_pendidik_update').on('click', function(event) {
            event.preventDefault();
            var id_pendidik = $('#id_pendidik_edit').val();
            var nama_pendidik = $('#nama_pendidik_edit').val();
            var NIP = $('#NIP_edit').val();
            var email_pendidik = $('#email_pendidik_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/Pendidik/update') ?>",
                dataType: "JSON",
                data: {
                    id_pendidik_edit: id_pendidik,
                    nama_pendidik_edit: nama_pendidik,
                    NIP_edit: NIP,
                    email_pendidik_edit: email_pendidik
                },
                success: function(data) {
                    $('[name="id_pendidik_edit"]').val("");
                    $('[name="nama_pendidik_edit"]').val("");
                    $('[name="NIP_edit"]').val("");
                    $('[name="email_pendidik_edit"]').val("");
                    $('#Modal_pendidik_Edit').modal('hide');
                    show_pendidik();
                }
            });
            return false;
        });

        //get data for delete record pendidik
        $('#show_data_pendidik').on('click', '.item_delete', function() {
            var id_pendidik = $(this).data('id_pendidik');

            $('#Modal_Pendidik_Delete').modal('show');
            $('[name="id_pendidik_delete"]').val(id_pendidik);
        });

        //delete record to database
        $('#btn_delete_pendidik').on('click', function() {
            var id_pendidik = $('#id_pendidik_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Admin/Pendidik/delete') ?>",
                dataType: "JSON",
                data: {
                    id_pendidik: id_pendidik
                },
                success: function(data) {
                    $('[name="id_pendidik_delete"]').val("");
                    $('#Modal_Pendidik_Delete').modal('hide');
                    show_pendidik();
                }
            });
            return false;
        });


        //Save pendidik
        $('#btn_simpanPendidik').on('click', function() {
            var nama_pendidik = $('#nama_pendidik').val();
            var email_pendidik = $('#email_pendidik').val();
            var NIP = $('#NIP').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Admin/pendidik/save') ?>",
                dataType: "JSON",
                data: {
                    nama_pendidik: nama_pendidik,
                    email_pendidik: email_pendidik,
                    NIP: NIP
                },
                success: function(data) {
                    $('[name="nama_pendidik"]').val("");
                    $('[name="email_pendidik"]').val("");
                    $('[name="NIP"]').val("");
                    show_pendidik();
                }
            });
            return false;
        });
    });
</script>
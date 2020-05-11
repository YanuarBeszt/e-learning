<!DOCTYPE html>
<html>

<!-- Head -->
<?php $this->load->view("admin/_partials/head.php") ?>
<!-- /.Head -->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header, breadcrumb) -->
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php $this->load->view($content) ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Modal -->
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <!-- /.Modal -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view("admin/_partials/js.php") ?>

</html>
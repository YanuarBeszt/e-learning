<!DOCTYPE html>
<html>

<!-- Head -->
<?php $this->load->view("client/_partials/head.php") ?>
<!-- /.Head -->

<body>
    <div class="wrapper">
        <?php $this->load->view("client/_partials/navbar.php") ?>

        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <?php $this->load->view($content) ?>
                    </div><!-- main-section-data end-->
                </div>
            </div>
        </main>
        <?php $this->load->view("client/_partials/footer.php") ?>

        <?php $this->load->view("client/_partials/modal.php") ?>
    </div>
    <!--theme-layout end-->

    <?php $this->load->view("client/_partials/js.php") ?>

</body>

</html>
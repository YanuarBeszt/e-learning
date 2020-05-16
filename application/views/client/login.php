<!DOCTYPE html>
<html>

<!-- Head -->
<?php $this->load->view("client/_partials/head.php") ?>
<!-- /.Head -->


<body class="sign-in">


    <div class="wrapper">


        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                </div>
                                <!--cm-logo end-->
                            </div>
                            <!--cmp-info end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <div class="sign_in_sec current" id="tab-1">
                                    <h3>Sign in</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="username" placeholder="Username">
                                                    <i class="la la-user"></i>
                                                </div>
                                                <!--sn-field end-->
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>Remember me</small>
                                                    </div>
                                                    <!--fgt-sec end-->
                                                    <a href="#" title="">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--login-resources end-->
                                </div>
                            </div>
                            <!--login-sec end-->
                        </div>
                    </div>
                </div>
                <!--signin-pop end-->
            </div>
            <!--signin-popup end-->
            <div class="footy-sec">
                <div class="container">
                    <ul>
                        <li><a href="#" title="">Help Center</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Community Guidelines</a></li>
                        <li><a href="#" title="">Cookies Policy</a></li>
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="#" title="">Forum</a></li>
                        <li><a href="#" title="">Language</a></li>
                        <li><a href="#" title="">Copyright Policy</a></li>
                    </ul>
                    <p><img src="<?= base_url("assets/client/") ?>images/copy-icon.png" alt="">Copyright 2018</p>
                </div>
            </div>
            <!--footy-sec end-->
        </div>
        <!--sign-in-page end-->


    </div>
    <!--theme-layout end-->


    <?php $this->load->view("client/_partials/js.php") ?>

</body>

</html>
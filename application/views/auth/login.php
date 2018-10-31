    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?php echo base_url('auth') ?>">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-warning">
                                <button class="close" data-dismiss='alert'>&times;</button>
                                <?php echo validation_errors(); ?>
                            </div>                            
                        <?php endif ?>
                        <?php if ($this->session->flashdata('message')): ?>
                            <div class="alert alert-warning">
                                <button class="close" data-dismiss='alert'>&times;</button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email" value="<?php echo set_value('email') ?>">
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Login <i class="ti-arrow-right"></i></button>
                        </div>
                        <!-- <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end 
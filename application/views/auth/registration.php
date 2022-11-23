<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register pages!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control form-control-user" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control form-control-user" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="password1" name="password1" class="form-control form-control-user" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="col-sm-6">
                                    <input type="password" id="password2" name="password2" class="form-control form-control-user" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary  btn-user btn-block">
                                Register Account
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->startSection('title', 'event - register'); ?>

<?php $__env->startSection('content'); ?>
<section class="register-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Form Column-->


            <!--Form Column-->
            <div class="form-column column col-lg-12 col-md-12 col-sm-12">

                <div class="sec-title">
                    <h2>Register Here</h2>
                    <div class="separate"></div>
                </div>

                <!--register Form-->
                <div class="styled-form register-form">
                    <form  action="/adminregister" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="name" value="" placeholder="Your Name *"required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="contact" value="" placeholder="Contact No"required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                            <input type="email" name="email" value="" placeholder="Emai Address*"required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="password" value="" placeholder="Enter Password"required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="password_confirmation" value="" placeholder="Confirm Password"required>
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" name="button" class="theme-btn btn-style-one"><span class="btn-title">Register here</span></button>
                            </div>
                            <div class="form-group submit-text pull-right">
                                * You must be a free registered to submit content.
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/admin/register.blade.php ENDPATH**/ ?>
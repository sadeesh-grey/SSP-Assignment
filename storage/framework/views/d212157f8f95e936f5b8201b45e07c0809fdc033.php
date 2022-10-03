<?php $__env->startSection('title', 'event - Home'); ?>

<?php $__env->startSection('content'); ?>
   <!--Page Title-->
   <section class="page-title" style="background-image: url(images/background/11.jpg);">
    <div class="anim-icons full-width">
        <span class="icon icon-bull-eye"></span>
        <span class="icon icon-dotted-circle"></span>
    </div>
    <div class="auto-container">
        <div class="title-outer">
            <h1>Login</h1>
            <ul class="page-breadcrumb">
                <li><a href="/adminregister">Register</a></li>
                <li>Login page</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Register Section-->
<section class="register-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Form Colu-->
<!--Form Column-->
<div class="form-column column col-lg-12 col-md-12 col-sm-12">

    <div class="sec-title">
        <h2>Login Now</h2>
        <div class="separate"></div>
    </div>

    <!--Login Form-->
    <div class="styled-form login-form">
        <form  action="/adminlogin" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                <input type="email" name="email" value="" placeholder="Emai Address*"required>
            </div>
            <div class="form-group">
                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                <input type="password" name="password" value="" placeholder="Enter Password"required>
            </div>
            <div class="clearfix">
                <div class="form-group pull-left">
                    <button type="submit" name="button" class="theme-btn btn-style-one"><span class="btn-title">Login Now</span></button>
                </div>
                <div class="form-group social-links-two pull-right">
                    Or login with
                    <a href="#" class="img-circle facebook"><span class="fab fa-facebook-f"></span></a>
                    <a href="#" class="img-circle twitter"><span class="fab fa-twitter"></span></a>
                    <a href="#" class="img-circle google-plus"><span class="fab fa-google-plus"></span></a>
                </div>
            </div>

            <div class="clearfix">
                <div class="pull-left">
                    <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                </div>
            </div>

        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/admin/login.blade.php ENDPATH**/ ?>
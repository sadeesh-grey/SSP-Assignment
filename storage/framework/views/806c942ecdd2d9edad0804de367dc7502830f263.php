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
            <h1>Register</h1>
            <ul class="page-breadcrumb">
                <li><a href="/login">Login</a></li>
                <li>Our Shop</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Register Section-->
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
                    <form  action="/register" method="POST">
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

<!--End Register Section-->

<!-- Subscribe Section Two -->
<section class="subscribe-section-two">
    <div class="auto-container">
        <div class="content-box">
            <div class="sec-title text-center light">
                <span class="sub-title">Get The Latest Updates</span>
                <h2>Signup For Newsletter</h2>
                <div class="divider"></div>
            </div>

            <div class="newsletter-form-two">
                <form method="post" action="blog.html">
                    <div class="form-group">
                        <input type="email" name="field-name" value="" placeholder="Signup For Newsletter" required>
                        <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">Subscribe</span></button>
                    </div>
                </form>
            </div>

            <div class="text">If You Want to Update For on Our Site a#<a href="#">Subscribe</a> Now.</div>
        </div>
    </div>
</section>
<!--End Subscribe Section Two -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/web/register.blade.php ENDPATH**/ ?>
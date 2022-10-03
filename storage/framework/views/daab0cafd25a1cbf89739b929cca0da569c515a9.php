<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Sidebar-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="our-shop">
                    <div class="row">

                        <!-- Shop Item -->
                        <?php $__currentLoopData = $comingup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comingup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="single-product-item col-lg-4 col-md-6 col-sm-12 text-center">
                            <div class="img-holder">
                                <a href="shop-detail.html"><img width="270" height="300" src="images/resource/products/1.jpg" class="" alt=""></a>
                            </div>
                            <div class="title-holder text-center">
                                <div class="static-content">
                                    <h3 class="title text-center"><a href="shop-detail.html"><?php echo e($comingup->event_name); ?></a></h3>
                                    <h3 class="title text-center"><a href="shop-detail.html">   </a></h3>
                                    <h3 class="title text-center"><a href="shop-detail.html"><?php echo e($comingup->category); ?></a></h3>
                                    <span class="price"><span class="amount"><span class="">LKR</span><?php echo e($comingup->price); ?></span></span>
                                </div>
                                <div class="overlay-content">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="shopping-cart.html"><span class="fa fa-shopping-cart"></span>
                                                <div class="toltip-content">
                                                    <p>Add to Cart</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-detail.html" class=""><span class="fa fa-heart"></span>
                                                <div class="toltip-content">
                                                    <p>Add Whishlist</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="images/resource/products/1.jpg" class="lightbox-image" data-fancybox="shop-gallery"><span class="fa fa-expand"></span>
                                                <div class="toltip-content">
                                                    <p>Zoom In</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>

                    <!-- Post Share Options -->
                    <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar padding-left">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search..." required>
                                <button type="submit"><i class="icon flaticon-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <h4 class="sidebar-title">Categories</h4>
                        <div class="widget-content">
                            <!-- Blog Category -->
                            <ul class="blog-categories">
                                <li><a href="blog-single.html">Business <span>03</span></a></li>
                                <li><a href="blog-single.html">Conference <span>07</span></a></li>
                                <li><a href="blog-single.html">Digital <span>06</span></a></li>
                                <li><a href="blog-single.html">Music <span>02</span></a></li>
                                <li><a href="blog-single.html">Startup <span>06</span></a></li>
                                <li><a href="blog-single.html">Workshop <span>09</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Post Widget -->
                    <div class="sidebar-widget popular-posts">
                        <h4 class="sidebar-title">Recent Posts</h4>
                        <div class="widget-content">

                            <article class="post">
                                <div class="post-inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                    <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                    <h6 class="text"><a href="blog-single.html">Chances are Good That There’s a Cloud Software</a></h6>
                                </div>
                            </article>

                            <article class="post">
                                <div class="post-inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                    <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                    <h6 class="text"><a href="blog-single.html">We Have Top Executive and Start Up Here Event 2021</a></h6>
                                </div>
                            </article>

                            <article class="post">
                                <div class="post-inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                    <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                    <h6><a href="blog-single.html">Why Lead Generation is Key For Business Growth.</a></h6>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="sidebar-widget popular-tags">
                        <h4 class="sidebar-title">Tags</h4>
                        <div class="widget-content">
                            <a href="#">Business</a>
                            <a href="#">Conference</a>
                            <a href="#">Speaker</a>
                            <a href="#">Digital</a>
                            <a href="#">Development</a>
                            <a href="#">Venue</a>
                            <a href="#">Tech</a>
                            <a href="#">Workshop</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/web/comingup.blade.php ENDPATH**/ ?>
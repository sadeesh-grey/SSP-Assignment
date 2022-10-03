<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-title" style="background-image: url(images/background/11.jpg);">
    <div class="anim-icons full-width">
        <span class="icon icon-bull-eye"></span>
        <span class="icon icon-dotted-circle"></span>
    </div>
    <div class="auto-container">
        <div class="title-outer">
            <h1>Our Shop</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Our Shop</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Shop Single Section-->
<section class="shop-single-section">
    <div class="auto-container">

        <!--Shop Single-->
        <div class="shop-page product-details">

            <!--Basic Details-->
            <div class="basic-details">
                <div class="row clearfix">

                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="carousel-outer">

                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href="images/resource/products/13.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/products/13.jpg" alt=""></a></li>

                            </ul>

                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li><img src="images/resource/products/14.jpg" alt=""></li>

                            </ul>

                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-lg-5 col-md-12 col-sm-12">
                        <div class="details-header">

                            <h2><?php echo e($event->event_name); ?></h2>
                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                            <div class="item-price">LKR <?php echo e($event->price); ?></div>
                        </div>

                        <div class="text">
                            <p><?php echo e($event->description); ?></p>
                        </div>

                        <div class="other-options">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <!--Btns Box-->
                                    <div class="btns-box">
                                        <button type="button" class="theme-btn btn-style-one"><span class="txt">Add To Cart</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            </div>
            <!--Basic Details-->

            <!--Product Info Tabs-->
            <div class="product-info-tabs">
                <!--Product Tabs-->
                <div class="prod-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">

                        <li data-tab="#prod-reviews" class="tab-btn">Reviews (2)</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="prod-details">
                            <div class="content">
                                <p>Lopsidedly wow fastidious before rhinoceros gosh from more unobtrusive since this unlike falsely far mundanely lethargically camel groomed save antelop thus inconspicuously since jay that for ouch far a one dog save gosh more ouch wherever that depending darn much daintily wiped hello jeez thus adversely man of war that unicorn thanks richly mannish less save like and dog from bore extensive. Supreme alas hellish circa.</p>
                                <p>Inside this beyond into bit on capable through jeez yet tolerably plain and shark stealthy more breezily because ground passably gecko pending far up erroneor yikes lantern whimsically mowed one come admonishing amidst floated fortuitous crud far the the staunchly.</p>
                            </div>
                        </div>

                        <!--Tab / Active Tab-->
                        <div class="tab" id="prod-info">
                            <div class="content">
                                <p>Lopsidedly wow fastidious before rhinoceros gosh from more unobtrusive since this unlike falsely far mundanely lethargically camel groomed save antelop thus inconspicuously since jay that for ouch far a one dog save gosh more ouch wherever that depending darn much daintily wiped hello jeez thus adversely man of war that unicorn thanks richly mannish less save like and dog from bore extensive. Supreme alas hellish.</p>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="prod-reviews">
                            <!--Reviews Container-->
                            <div class="reviews-container">

                                <!--Review-->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="images/resource/author-1.jpg" alt=""></figure>
                                    <div class="rev-content">
                                        <div class="rev-header clearfix">
                                            <h4>Michel Britney</h4>
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="far fa-star"></span> <span class="far fa-star"></span></div>
                                            <div class="time">18 Hours Ago</div>
                                        </div>
                                        <div class="rev-text">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster.</div>
                                    </div>
                                </div>

                                <!--Review-->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="images/resource/author-2.jpg" alt=""></figure>
                                    <div class="rev-content">
                                        <div class="rev-header clearfix">
                                            <h4>Denny</h4>
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="far fa-star"></span> <span class="far fa-star"></span></div>
                                            <div class="time">18 Hours Ago</div>
                                        </div>
                                        <div class="rev-text">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster than lightning no one you see is smarter than he loveable space that needs your face threes company too.</div>
                                    </div>
                                </div>

                                <!--Add Review-->
                                <div class="add-review">
                                    <h2>Add a Review</h2>

                                    <form method="post" action="shop-detail.html">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Name *</label>
                                                <input type="text" name="name" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Email *</label>
                                                <input type="email" name="email" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Website *</label>
                                                <input type="text" name="website" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Rating </label>
                                                <div class="rating">
                                                    <a href="#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                                    <a href="#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                    <a href="#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                                    <a href="#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                    <a href="#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Your Review</label>
                                                <textarea name="review-message"></textarea>
                                            </div>
                                            <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                <button type="button" class="theme-btn btn-style-one"><span class="txt">Add Review</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!--End Tab-->

                    </div>
                </div>

            </div>
            <!--End Product Info Tabs-->

        </div>

    </div>
</section>
<!--End Shop Single Section-->

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/web/book.blade.php ENDPATH**/ ?>
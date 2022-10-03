<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
   <!-- Content -->
   <div class="content">

    <div class="page-header">
        <div class="page-title">
            <h3>Add New Category</h3>
        </div>
    </div>
     
     <div class="row">
        <div class="col-lg-!2 col-md-12">
            <div class="card">
                <div class="card-body">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/admin/category" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name">Title</label>
                                        <input type="text" name="name" class="form-control" placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<!-- ./ Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/admin/category.blade.php ENDPATH**/ ?>
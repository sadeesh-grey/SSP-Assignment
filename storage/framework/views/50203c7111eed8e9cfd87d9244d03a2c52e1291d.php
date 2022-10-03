<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="page-header">
        <div class="page-title">
            <h3>Create Event </h3>
        </div>
    </div>
     
     <div class="row">
        <div class="col-lg-!2 col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title">Create a new event</h6>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="/admin/index" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="event_name">Event Name</label>
                                        <input type="text" name="event_name" class="form-control"  placeholder="Event Name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Date</label>
                                        <input type="text" name="datetimes" class="form-control">
                                        <input type="hidden" name="start_datetime" class="form-control">
                                        <input type="hidden" name="end_datetime" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="name">Category</label>
                                        <select class="select2-example" name="category" required>
                                            <option>Select</option>
                                            <?php $__currentLoopData = $eventcategorie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventcategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($eventcategorie->name); ?>"><?php echo e($eventcategorie->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="name">Event Contact</label>
                                        <input type="text" name="contact" class="form-control" id="name" value="" placeholder="0776666666 or example@gmail.com" required>
                                    </div>


                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name">Ticket Price</label>
                                        <input type="text" name="price" class="form-control" id="name" value="" placeholder="LKR 1200" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        
                                        <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        
                                        <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
                                    </div>
                                </div>



                                
                                
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Create</button>

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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'Y-MM-DD hh:mm A'
    }
},function(start, end, label){
        $('input[name="start_datetime"]').val(start.format('YYYY-MM-DD HH:mm:ss'));
        $('input[name="end_datetime"]').val(end.format('YYYY-MM-DD HH:mm:ss'));
});


$('.select2-example').select2({
    placeholder: 'Select'
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sadeesh\eventmanager\resources\views/admin/index.blade.php ENDPATH**/ ?>
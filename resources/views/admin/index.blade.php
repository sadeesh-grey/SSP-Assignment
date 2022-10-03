@extends('admin.includes.dashboard')
@section('title', 'Home')

@section('content')
<div class="content">

    <div class="page-header">
        <div class="page-title">
            <h3>Create Event </h3>
        </div>
    </div>
     {{-- basic details --}}
     <div class="row">
        <div class="col-lg-!2 col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h6 class="card-title">{{ empty($profile) ? 'Add new profile' : 'Update profile' }}</h6> --}}
                    <h6 class="card-title">Create a new event</h6>
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <form action="{{ empty($profile) ? 'create-profile' : 'update-profile' }}" method="POST" enctype="multipart/form-data"> --}}
                            <form action="/admin/index" method="POST">
                                @csrf
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
                                            @foreach ($eventcategorie as $eventcategorie)
                                            <option value="{{ $eventcategorie->name }}">{{ $eventcategorie->name}}
                                            </option>
                                            @endforeach
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
                                        {{-- <textarea class="form-control" name="address" id="address" rows="3" required>{{ old('address',!empty($profile) ? $profile->address : '' )}}</textarea> --}}
                                        <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        {{-- <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description',!empty($profile) ? $profile->description : '' )}}</textarea> --}}
                                        <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
                                    </div>
                                </div>



                                {{-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Upload Cover Images (Max: 5)</label>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 bow-img-uploader-cover">
                                        <label for="input" class="bow-img-uploader">
                                            <img src="/images/img_upload.png" alt="">
                                            <span id="span">Click here to select</span>
                                            <input id="input" type="file" name="images" class="bow-img-input" accept="image/*">
                                        </label>
                                        <i class="fa fa-trash-o" onclick="remImg(this)"></i>
                                        <i class="fa fa-plus" onclick="addImg(this)"></i>
                                    </div>
                                </div> --}}
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

@endsection
@section('scripts')
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

@endsection

@extends('admin.includes.dashboard')
@section('title', 'Home')

@section('content')
   <!-- Content -->
   <div class="content">

    <div class="page-header">
        <div class="page-title">
            <h3>Add New Category</h3>
        </div>
    </div>
     {{-- basic details --}}
     <div class="row">
        <div class="col-lg-!2 col-md-12">
            <div class="card">
                <div class="card-body">
                   {{-- <h6 class="card-title">Add new category</h6> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/admin/category" method="POST">
                                @csrf
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
@endsection

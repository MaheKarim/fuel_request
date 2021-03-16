@extends('admin.home')

@section('content')
    <h1 class="mt-4">LPG Cylinder</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" > Dashboard </li>
        <li class="breadcrumb-item active">LPG Cylinder</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table ml-1"></i>
            Add LPG Cylinder Sheet
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.gasCylinder.store') }}">
            @csrf
            <!-- Area Start -->
                <div class="form-row">
                    <!-- Area END -->
                    <!-- Area Start -->
                </div>
                <!-- Area END -->

                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" name="cylinder_name" placeholder="যমুনা গ্যাস , বসুন্ধরা গ্যাস ">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="phn">Size</label>
                        <input type="text" class="form-control" name="cylinder_size" placeholder=" ছোট / বড় সিলিন্ডার">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phn">Stock</label>
                        <input type="text" class="form-control" name="cylinder_stock" placeholder=" ১৮ টি  ">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phn">Price</label>
                        <input type="text" class="form-control" name="cylinder_price" placeholder=" ৭৯০ টাকা  ">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

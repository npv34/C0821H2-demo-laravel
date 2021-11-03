@extends('admin.master')
@section('content-admin')

    <div class="card">
        <h5 class="card-header">Add new product</h5>
        <div class="card-body">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Desc</label>
                    <input type="text" name="desc" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control" name="content_product" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

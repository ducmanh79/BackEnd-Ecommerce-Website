@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card card-primary">
    <div class="card-header mb-2">
        <h3 class="card-title">Product Management</h3>
    </div>
    
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Desc</th>
            <th>Short Desc</th>
            <th>Category</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->short_desc}}</td>
                    <td>{{$product->category->title}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('products.show', [$product->id])}}">Detail</a>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', [$product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('products.edit', [$product->id])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col">
        <div class="card card-primary">
            <div class="card-header mb-2">
                <h3 class="card-title">Add New Product</h3>
            </div>

            <form autocomplete="off" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Product Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Product Title" name="title">
                        <label for="short_desc">Product Short Description</label>
                        <input type="text" class="form-control" id="short_desc" placeholder="Enter Product Short Description" name="short_desc">
                        <label for="description">Product Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter Product Description" name="desc">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price">
                        <label for="category">Select Product Category</label>
                        <select name="category_id" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="thumbnail">Product Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                        <label for="image">Product Images</label>
                        <input type="file" class="form-control" id="image" name="images[]" multiple>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
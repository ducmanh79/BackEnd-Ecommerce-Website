@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card card-primary">
    <div class="card-header mb-2">
        <h3 class="card-title">Product Detail</h3>
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
        </thead>
        <tbody>
	        <tr>
	            <td>{{$product->id}}</td>
	            <td>{{$product->title}}</td>
	            <td>{{$product->price}}</td>
	            <td>{{$product->desc}}</td>
	            <td>{{$product->short_desc}}</td>
	            <td>{{$product->category->title}}</td>
	            <td>
	                Delete
	            </td>
	            <td>Update</td>
	        </tr>
        </tbody>
    </table>
    <h3>Images of {{$product->title}}</h3>
    <div class="row">
		@foreach($images as $image)
			<div class="col-3">
		    	<div class="card" style="width: 200px;">
			  		<img src="{{asset('/storage/product_images/'.$image->image_path)}}" class="card-img-top" alt="...">
				</div>
			</div>
		@endforeach   	
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header mb-2">
                    <h3 class="card-title">Edit Product</h3>
                </div>

                <form autocomplete="off" action="{{route('products.update', [$product->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Product Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Product Title" name="title" value="{{$product->title}}">
                            <label for="short_desc">Product Short Description</label>
                            <input type="text" class="form-control" id="short_desc" placeholder="Enter Product Short Description" name="short_desc"
                            value="{{$product->short_desc}}">
                            <label for="description">Product Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter Product Description" name="desc" value="{{$product->desc}}">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price" value="{{$product->price}}">
                            <label for="category">Select Product Category</label>
                            <select name="category_id" id="category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <label for="color">Color Select</label>
                            <input type="text" class="form-control" id="color" placeholder="enterColor" name="color" value="{{$product->color}}">
                        
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
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
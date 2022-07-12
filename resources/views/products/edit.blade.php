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
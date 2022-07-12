@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Category</h3>
    </div>


    <form autocomplete="off" action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Category Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Category Title" name="title">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Category</button>
        </div>
    </form>
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
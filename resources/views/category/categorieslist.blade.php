@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="card card-primary">
    @if(Session::has('success'))
        <div class="alert alert-sucess">
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Categories List</h3>
    </div>

    <table class="table table-striped hover">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th>{{$category->id}}</th>
                    <th>{{$category->title}}</th>
                    <th>
                        <a class="btn btn-primary" href="{{route('category.edit', [$category->id])}}">Edit</a>
                    </th>
                    <th>
                        <form action="{{route('category.destroy', [$category->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
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
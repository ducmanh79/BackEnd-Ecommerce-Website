@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="card card-primary w-25 mx-auto">
    <div class="card-header mb-2">
        <h3 class="card-title">Edit category {{$category->title}}</h3>
    </div>

    <form action="{{route('category.update', [$category->id])}}" method="POST" class="mx-auto">
            @csrf
            @method('PUT')
            <input type="text" name="title"  id="title" placeholder="Change category title">
            <input class="btn btn-danger" type="submit" value="Change">
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
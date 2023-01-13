@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
<div class="panel panel-default">
    <h2 class="panel-heading ">
        Create a new Category
    </h2>
    <div class="panel-body">
        <form action="{{ route('category.store') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="form-group mt-5">
                    <div class="text-center">
                        <button class="btn btn-success">Store Category</button>
                    </div>
        </form>
    </div>
</div>
@stop
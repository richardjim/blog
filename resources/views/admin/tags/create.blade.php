@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
<div class="panel panel-default">
    <h2 class="panel-heading ">
        Create a new Tag
    </h2>
    <div class="panel-body">
        <form action="{{ route('tags.store') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Tag">Name</label>
                <input type="text" name="tag" class="form-control">
                <div class="form-group mt-5">
                    <div class="text-center">
                        <button class="btn btn-success">Save Tag</button>
                    </div>
        </form>
    </div>
</div>
@stop
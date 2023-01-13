@extends('layouts.app')

@section('content')
@if (count($errors) > 0)
<ul class="list-group">
    @foreach($errors->all() as $error)

    <li class="list-group-item text-danger">
        {{ $error }}
    </li>
    @endforeach
</ul>
@endif
<div class="panel panel-default">
    <h2 class="panel-heading ">
        Create a new post
    </h2>
    <div class="panel-body">
        <form action="{{ url('admin/post/store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">

                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>

                        <div class="form-group mt-5">
                            <div class="text-center">
                                <button class="btn btn-success">Store Post</button>
                            </div>
        </form>
    </div>
</div>
@stop
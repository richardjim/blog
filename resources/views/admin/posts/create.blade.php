@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
<div class="panel panel-default">
    <h2 class="panel-heading ">
        Create a new post
    </h2>
    <div class="panel-body">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tag"> Select a Tag</label>
                @foreach($tags as $tag)
                <div class="checkbox">
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }}
                </div>
                @endforeach
            </div>
            <div class=" form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group mt-5">
                <div class="text-center">
                    <button class="btn btn-success">Store Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
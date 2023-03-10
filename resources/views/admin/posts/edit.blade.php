@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
<div class="panel panel-default">
    <h2 class="panel-heading ">
        Edit: {{$post->title}}
    </h2>
    <div class="panel-body">
        <form action="{{ route('post.update',['id'=> $post->id ]) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class=" form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" value="{{$post->content}}" class="form-control"></textarea>
            </div>
            <div class="form-group mt-5">
                <div class="text-center">
                    <button class="btn btn-success">Update Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
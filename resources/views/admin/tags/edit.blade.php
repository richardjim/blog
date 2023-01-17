@extends('layouts.app')

@section('content')
@include('admin.includes.errors')

<div class="panel panel-default">
    <h2 class="panel-heading ">
        Update Tag: {{$tag->tag}}
    </h2>
    <div class="panel-body">
        <form action="{{ route('tags.update', ['id' => $tag->id]) }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
                <div class="form-group mt-5">
                    <div class="text-center">
                        <button class="btn btn-success">Update Tag</button>
                    </div>
        </form>
    </div>
</div>
@stop
@extends('layouts.app')


@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Restore
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
                @if($posts->count() > 0)

                @foreach($posts as $post)
                <tr>
                    <td>
                        <!-- {{$post->featured}} -->
                        <img src="{{ $post->featured }}" alt="{{$post->title}}" width="90px" height="50px">
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        <a href="{{route('post.edit', ['id' => $post->id ]) }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil">Edit</span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('post.restore',['id' => $post->id ]) }}">

                            <button class="btn btn-success" type="submit">Restore</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('post.kill',['id' => $post->id ]) }}" method="post">
                            @csrf
                            @method('post')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colspan="5" class="text-center">No trashed posts</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop
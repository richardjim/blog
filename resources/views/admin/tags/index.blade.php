@extends('layouts.app')


@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Tag Name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
            </thead>
            <tbody>
                @if($tags->count() > 0)

                @foreach($tags as $tag)
                <tr>
                    <td>
                        {{$tag->tag}}
                    </td>
                    <td>
                        <a href="{{route('tags.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil">Edit</span>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('tags.destroy', $tag->id)}}" method="post">
                            @csrf
                            @method('post')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colspan="5" class="text-center">No tags created</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop
@extends('layouts.app')


@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Category Name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil">Edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('category.destroy', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-trash">Delete</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
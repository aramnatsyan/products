@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Create Category</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->createdDate }}</td>
                                <td>
                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Show</a>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

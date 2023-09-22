@extends('layouts.admin')

@section('title')
    Post
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Posts</h4>
                            <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Add post</a>
                        </div>
                        @if (session('message'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span>×</span>
                                        </button>
                                        {{ session('message') }}
                                    </div>
                                </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Categories</th>
                                            <th>Action</th>
                                        </tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->category->name ?? 'Bog\'lanmagan'}}</td>
                                                <td>
                                                    <div class="row">
                                                        <a href="{{ route('admin.posts.show', $post->id)}}" class="btn btn-primary">Ko'rish</a>
                                                        <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ $posts->links('vendor.pagination.my_pagination') }}
                        </nav>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

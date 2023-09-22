@extends('layouts.admin')

@section('title')
    Post Create
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form action=" {{ route('admin.posts.store') }} " method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                            <h4>Post create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Title</h5>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <h5>Category</h5>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <h5>Taglari</h5>
                                    <select class="form-control" name="tag_id[]" multiple style="height:100px;">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('title')
    Edit Create
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form action=" {{ route('admin.posts.update', $post->id) }} " method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-header">
                            <h4>Edit create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Title</h5>
                                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <h5>Category</h5>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option
                                                @if($post->category_id==$category->id) selected @endif
                                                value="{{ $category->id }}">{{ $category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <h5>Taglari</h5>
                                    <select class="form-control" name="tag_id[]" multiple style="height:100px;">
                                        @foreach ($tags as $tag)
                                            <option
                                                {{-- ikkinchi usuli --}}
                                                @php
                                                    $ids = $post->tags->pluck('id')->toArray();
                                                @endphp
                                                @if (in_array($tag->id, $ids))
                                                    selected
                                                @endif

                                                {{-- bitta usuli --}}
                                                {{-- @foreach ($post->tags as $postTag)
                                                    @if($postTag->id == $tag->id) selected @endif
                                                @endforeach --}}
                                                value="{{ $tag->id }}">{{ $tag->name}}
                                            </option>
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

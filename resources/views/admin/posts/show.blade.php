@extends('layouts.admin')
<?php
    $i = 1;
?>

@section('title')
    Show
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
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
                    <h2>
                        {{ $post->title }}
                    </h2>
                    <ul>
                        @foreach ($post->tags as $tag)
                            <li>
                                {{$i++}},
                                {{ $tag->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

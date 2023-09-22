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
                    <h2>
                        {{ $category->name }}
                    </h2>
                    <ul>
                        @foreach ($category->posts as $post)

                            <li>
                                {{$i++}},
                                {{ $post->title }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

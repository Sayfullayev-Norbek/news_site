@extends('layouts.admin')

@section('title')
    Services Create
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form action=" {{ route('admin.services.store') }} " method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Services create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Title-UZ</h5>
                                    <input type="text" class="form-control" name="title_uz">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Title-RU</h5>
                                    <input type="text" class="form-control" name="title_ru">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Title-EN</h5>
                                    <input type="text" class="form-control" name="title_en">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Description-UZ</h5>
                                    <input type="text" class="form-control" name="description_uz">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Description-RU</h5>
                                    <input type="text" class="form-control" name="description_ru">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Description-EN</h5>
                                    <input type="text" class="form-control" name="description_en">
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

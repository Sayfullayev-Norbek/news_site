@extends('layouts.admin')

@section('title')
    Category Create
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form action=" {{ route('admin.categories.store') }} " method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                            <h4>Category create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Categories Create</h5>
                                    <input type="text" class="form-control" name="name">
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

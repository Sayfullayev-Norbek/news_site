@extends('layouts.admin')

@section('title')
    Services
@endsection

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Services</h4>
                            <a class="btn btn-primary" href="{{ route('admin.services.create') }}">Add Services </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title_uz</th>
                                            <th>Description_uz</th>
                                            <th>Action</th>
                                        </tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $service->title_uz }}</td>
                                                <td>{{ $service->description_uz }}</td>
                                                <td>
                                                    <div class="row">
                                                        <a href="{{ route('admin.services.show', $service->id)}}" class="btn btn-primary">Ko'rish</a>
                                                        <a href="{{ route('admin.services.edit', $service->id)}}" class="btn btn-info">Edit</a>
                                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="service">
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
                            {{ $services->links('vendor.pagination.my_pagination') }}
                        </nav>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

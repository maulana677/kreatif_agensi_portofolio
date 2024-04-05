@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Service</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Service</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Service</h2>
            <p class="section-lead">
                On this page you can see all the data.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Services</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.services.create') }}" class="btn btn-success">Create New <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">
                                                #
                                            </th>
                                            <th>Image</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" width="100" alt=""
                                                        class="img-thumbnail">
                                                </td>
                                                <td>
                                                    <img src="{{ asset($item->icon) }}" width="100" alt="">
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->sub_title }}</td>
                                                <td>
                                                    <a href="{{ route('admin.services.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.services.destroy', $item->id) }}"
                                                        class="btn btn-danger delete-item"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush

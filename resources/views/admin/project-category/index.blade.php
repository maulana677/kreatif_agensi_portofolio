@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Project Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.projects-category.index') }}">Posts</a></div>
                <div class="breadcrumb-item">Project Category</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Project Category</h2>
            <p class="section-lead">
                On this page you can create a new post and fill in all fields.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Project Categories</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.projects-category.create') }}" class="btn btn-success">Create New
                                    <i class="fas fa-plus"></i></a>
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
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projectCategory as $item)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->slug }}</td>
                                                <td>
                                                    <a href="{{ route('admin.projects-category.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.projects-category.destroy', $item->id) }}"
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

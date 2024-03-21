@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Project</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Project</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Project</h2>
            <p class="section-lead">
                On this page you can see all the data.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Project</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Create New <i
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
                                            <th>Cover</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $item)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td>
                                                    <img src="{{ asset($item->cover) }}" width="200" alt=""
                                                        class="img-thumbnail">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->projectCategory->name }}</td>
                                                <td>
                                                    <a href="{{ route('admin.projects.assign.tool', $item->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-plus"> </i> Add Tools
                                                    </a>
                                                    <a href="{{ route('admin.projects-screenshots.create-page', $item->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-plus"> </i> Add Screenshots
                                                    </a>
                                                    <a href="{{ route('admin.projects.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href="{{ route('admin.projects.destroy', $item->id) }}"
                                                        class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i>
                                                        Hapus</a>
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

@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Assign Tools</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Create Assign Tools</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Assign Tools</h2>
            <p class="section-lead">
                On this page you can create a new post and fill in all fields.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Assign Tools</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.projects-tools.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tools</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="tool_id">
                                            <option>Select</option>
                                            @foreach ($tools as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Assign Tools</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tools</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projectTools as $item)
                                        <tr>
                                            <td>{{ $item->tools->name }}</td>
                                            <td>
                                                <a href='{{ route('admin.projects-tools.destroy', $item->id) }}'
                                                    class='btn btn-danger delete-item mx-2'><i class='fas fa-trash'></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($count === 0)
                                        <tr>
                                            <td colspan='2' class="text-center">No data found!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

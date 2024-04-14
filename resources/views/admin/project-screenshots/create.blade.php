@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Screenshots ({{ $project->name }})</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Create Screenshots</div>
            </div>
        </div>
        <div class="section-body">
            <div>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3">Go Back</a>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Screenshots</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.projects.screenshots.store-page', $project) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <label>Screenshots</label>
                                        <div id="image-preview" class="image-preview mb-3">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="screenshot" id="image-upload" />
                                        </div>
                                        <button class="btn btn-primary">Add Screenshots</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-body">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">
                                            No
                                        </th>
                                        <th>Screenshots</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($project->screenshots as $item)
                                        <tr>
                                            <td>{{ ++$loop->index }}</td>
                                            <td>
                                                <img src="{{ asset($item->screenshot) }}" width="150" alt=""
                                                    class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.projects-screenshots.destroy', $item->id) }}"
                                                    class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>
                                                {{--  <a href='{{ route('admin.projects-screenshots.destroy', $item->id) }}'
                                                    class='btn btn-danger mx-2'><i class='fas fa-trash'></i> Delete</a>  --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan='3' class="text-center">No data found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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

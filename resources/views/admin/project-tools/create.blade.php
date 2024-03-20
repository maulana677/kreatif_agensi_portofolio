@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Assign Tools ({{ $project->name }})</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Create Assign Tools</div>
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
                            <h4>Assign Tools</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.projects.assign.tool.store', $project) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <div class="col-sm-12 col-md-7">
                                        <label>Tools</label>
                                        <select class="form-control selectric" name="tool_id" id="tool_id">
                                            <option>Select</option>
                                            @foreach ($tools as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Assign Tools</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-body">
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Tools</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($project->tools as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($item->logo) }}" width="80" alt=""
                                                    class="img-thumbnail">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <form action="{{ route('admin.projects-tools.destroy', $item->pivot->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class='btn btn-danger mx-2'><i
                                                            class='fas fa-trash'></i> Hapus</button>

                                                </form>
                                                {{--  <a href='{{ route('admin.projects-tools.destroy', $item->id) }}'
                                                    class='btn btn-danger mx-2'><i class='fas fa-trash'></i></a>  --}}
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

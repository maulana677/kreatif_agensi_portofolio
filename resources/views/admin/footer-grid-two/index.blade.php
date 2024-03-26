@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Footer Grid Two</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.projects-category.index') }}">Posts</a></div>
                <div class="breadcrumb-item">Create Footer Info</div>
            </div>
        </div>

        <div class="card card-primary">
            @php
                $footerTitle = \App\Models\FooterTitle::where([
                    'key' => 'grid_two_title',
                ])->first();
            @endphp
            <div class="card-body">
                <form action="{{ route('admin.footer-grid-two-title') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Footer Title</label>
                        <input type="text" class="form-control" name="title" value="{{ @$footerTitle->value }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </form>
            </div>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Footer grid two links</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.footer-grid-two.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create new
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th class="text-left">
                                    No
                                </th>
                                <th>Name</th>
                                <th>Url</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($footer as $item)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->url }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge badge-primary">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.footer-grid-one.edit', $item->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.footer-grid-one.destroy', $item->id) }}"
                                            class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#table").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [2, 3]
            }]
        });
    </script>
@endpush

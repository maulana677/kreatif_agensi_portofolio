@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Testimonial</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Testimonial</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Testimonial</h2>
            <p class="section-lead">
                On this page you can see all the data.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Testimonial</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.testimonial.create') }}" class="btn btn-success">Create New <i
                                        class="fas fa-plus"></i></a>
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
                                            <th>Testimonial</th>
                                            <th>Rating</th>
                                            <th>Nama</th>
                                            <th>Pekerjaan</th>
                                            <th>Avatar</th>
                                            <th>Logo</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $item)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td>{{ $item->testimonial_text }}</td>
                                                <td>{{ $item->rating }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->job_title }}</td>
                                                <td>
                                                    <img src="{{ asset($item->avatar) }}" width="100" alt=""
                                                        class="img-thumbnail">
                                                </td>
                                                <td>
                                                    <img src="{{ asset($item->logo) }}" width="100" alt=""
                                                        class="img-thumbnail">
                                                </td>
                                                <td>{{ $item->date_created }}</td>
                                                <td>
                                                    <a href="{{ route('admin.testimonial.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href="{{ route('admin.testimonial.destroy', $item->id) }}"
                                                        class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i>
                                                        Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $item->links() !!}
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

@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>FAQ Section</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">FAQ Section</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">FAQ Section</h2>
            <p class="section-lead">
                On this page you can update post.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update FAQ Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.faq-section-setting.update', 1) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" value="{{ $faq->title }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="sub_title" id="" class="form-control" style="height: 100px">{{ $faq->sub_title }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Text</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="btn_text" value="{{ $faq->btn_text }}"
                                            class="form-control">
                                    </div>
                                </div>

                                {{--  @if ($faq->logo)  --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="logo" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                {{--  @endif  --}}

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
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
            $('#image-preview').css({
                'background-image': 'url("{{ asset($faq->logo) }}")',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        });
    </script>
@endpush

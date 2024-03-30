@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Footer Social Links</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Edit Footer Social Links</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Footer Social Links</h2>
            <p class="section-lead">
                On this page you can update post.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Social Link</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.footer-social.update', $footerSocialLink->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                        for="">Logo</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img src="{{ asset($footerSocialLink->icon) }}" width="100px" alt=""
                                            class="mb-2">
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Url</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="url" class="form-control"
                                            value="{{ $footerSocialLink->url }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="status" id="" class="form-control">
                                            <option {{ $footerSocialLink->status == 1 ? 'selected' : '' }} value="1">
                                                Active
                                            </option>
                                            <option {{ $footerSocialLink->status == 0 ? 'selected' : '' }} value="0">
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
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

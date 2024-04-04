@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Faq Question</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Faq Question</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Faq Question</h2>
            <p class="section-lead">
                On this page you can update post.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Title</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.faq-question.update', $faqQuestion->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Question</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="question" class="form-control"
                                            value="{{ $faqQuestion->question }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Answer</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea type="text" name="answer" class="form-control">{!! $faqQuestion->answer !!}</textarea>
                                    </div>
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

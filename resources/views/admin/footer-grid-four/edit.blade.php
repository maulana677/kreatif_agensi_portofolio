@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Footer Grid Four</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Footer Grid Four</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer-grid-four.update', $footer->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <img src="{{ asset($footer->logo) }}" width="100px" alt=""><br>
                        <label for="">Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" type="text" class="form-control" id="name"
                            value="{{ $footer->name }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Url</label>
                        <input name="url" value="{{ $footer->url }}" type="text" class="form-control">
                        @error('url')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option {{ $footer->status == 1 ? 'selected' : '' }} value="1">Active
                            </option>
                            <option {{ $footer->status == 0 ? 'selected' : '' }} value="0">Inactive
                            </option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

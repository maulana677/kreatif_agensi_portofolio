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
                <form action="{{ route('admin.footer-grid-four.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Logo</label>
                        <div class="">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="logo" id="image-upload" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Url</label>
                        <input name="url" type="text" class="form-control">
                        @error('url')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection

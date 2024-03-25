@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Orders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Project Orders</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Detail Orders</h2>
            <p class="section-lead">
                On this page you can see all the data.
            </p>
            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Orders</h2>
                                    {{--  <div class="invoice-number">Order #12345</div>  --}}
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Order From:</strong><br>
                                            {{ $projectsOrders->name }}<br>
                                            <br>
                                            <strong>Email:</strong><br>
                                            {{ $projectsOrders->email }}<br>
                                        </address>
                                        <hr>

                                        <address>
                                            <strong>Brief:</strong><br>
                                            {{ $projectsOrders->brief }}<br>
                                            <br>
                                            <strong>Category:</strong><br>
                                            {{ $projectsOrders->projectCategory->name }}<br>
                                            <br>
                                            <strong>Budget:</strong><br>
                                            Rp. {{ $projectsOrders->budget }}<br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

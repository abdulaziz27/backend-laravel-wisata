@extends('layouts.app')

@section('title', 'Order Detail')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Order Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Orders</a></div>
                    <div class="breadcrumb-item">Order Detail</div>
                </div>
            </div>

            <div class="section-body">
                @include('layouts.alert')

                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h4>Order Summary</h4>
                            </div>
                            <div class="card-body">

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="mb-2 font-weight-bold">Total Price:</div>
                                        <div>{{ number_format($order->total_price, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-2 font-weight-bold">Transaction Time:</div>
                                        <div>{{ \Carbon\Carbon::parse($order->transaction_time)->format('d F Y H:i:s') }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-2 font-weight-bold">Total Items:</div>
                                        <div>{{ $order->total_item }}</div>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mb-3">Products</h5>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Wisata</th>
                                                <th>Tiket</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderItems as $item)
                                                <tr>
                                                    <td>{{ $item->product->category->name ?? '-' }}</td>
                                                    <td>{{ $item->product->name }}</td>
                                                    <td>{{ number_format($item->product->price, 0, ',', '.') }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush

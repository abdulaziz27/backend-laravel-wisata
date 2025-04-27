@extends('layouts.app')

@section('title', 'Orders')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Orders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Orders</a></div>
                <div class="breadcrumb-item">All Orders</div>
            </div>
        </div>

        <div class="section-body">
            @include('layouts.alert')

            <h2 class="section-title">Orders</h2>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Orders</h4>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Transaction Time</th>
                                            <th>Payment Method</th>
                                            <th>Total Price</th>
                                            <th>Total Item</th>
                                            <th>Order By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>
                                                    <a href="{{ route('orders.show', $order->id) }}">
                                                        {{ \Carbon\Carbon::parse($order->transaction_time)->format('d F Y H:i:s') }}
                                                    </a>
                                                </td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ number_format($order->total_price, 0, ',', '.') }}</td>
                                                <td>{{ $order->total_item }}</td>
                                                <td>{{ $order->cashier->name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="float-right">
                                {{ $orders->withQueryString()->links() }}
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

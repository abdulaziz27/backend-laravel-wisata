@extends('layouts.app')

@section('title', 'Dashboard')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pengguna</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\User::count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Wisata</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\Category::count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pesanan</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\Order::count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Penjualan Terakhir</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No. Pesanan</th>
                                            <th>Tanggal</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(\App\Models\Order::latest()->take(5)->get() as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->created_at->format('d M Y') }}</td>
                                                <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                                <td><span class="badge badge-success">Selesai</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Wisata Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                @foreach(\App\Models\Category::latest()->take(4)->get() as $category)
                                    <li class="media">
                                        @if($category->image)
                                            <img class="mr-3 rounded" width="50" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                                        @else
                                            <img class="mr-3 rounded" width="50" src="{{ asset('img/products/product-1-50.png') }}" alt="default">
                                        @endif
                                        <div class="media-body">
                                            <div class="media-title">{{ $category->name }}</div>
                                            <div class="text-small text-muted">Ditambahkan {{ $category->created_at->diffForHumans() }}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

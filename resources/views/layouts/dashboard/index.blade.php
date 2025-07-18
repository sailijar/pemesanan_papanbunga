@extends('layouts.template')

@section('title', 'dashboard')

@section('headline')
    Dashboard
@endsection

@section('content')

    <div class="page-body">
        <div class="row">

            <div class="col-md-3 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">Pelanggan</span>
                        <h4>$23,589</h4>
                        {{-- <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                </span>
            </div> --}}

                        {{-- Tombol Lihat Produk --}}
                        <div class="text-right mt-3">
                            <a href="{{ route('pelanggan') }}" class="btn btn-sm btn-outline-primary">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">Pesanan</span>
                        <h4>$23,589</h4>
                        {{-- <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                </span>
            </div> --}}

                        {{-- Tombol Lihat Produk --}}
                        <div class="text-right mt-3">
                            <a href="{{ route('pesanan') }}" class="btn btn-sm btn-outline-primary">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">Produk</span>
                        <h4>$23,589</h4>
                        {{-- <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                </span>
            </div> --}}

                        {{-- Tombol Lihat Produk --}}
                        <div class="text-right mt-3">
                            <a href="{{ route('produk') }}" class="btn btn-sm btn-outline-primary">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>


@endsection

@extends('layouts.template')

@section('title', 'dashboard')

@section('headline')
    Dashboard
@endsection

@section('content')

    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                <span class="text-c-yellow f-w-600">Pelanggan</span>
                <h4>+562</h4>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                    </span>
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
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                    </span>
                </div>
            </div>
        </div>
    </div>




@endsection

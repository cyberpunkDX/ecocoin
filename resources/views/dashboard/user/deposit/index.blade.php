@extends('dashboard.user.layouts.master')
@section('content')

<div class="row">
    <div class="col-sm-12 col-md-12">
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <p class="text-center">Select a wallet to deposit into your account.</p>
    </div>
    @foreach ($wallets as $wallet)
        <div class="col-lg-4 mb-4 rounded mb-2 shadow">
            <a href="{{ route('user.deposit.checkout', $wallet->uuid) }}">
                <div class="card h-100">
                    <div class="row">
                        <div class="col-2 mt-3">
                            <div style="width: 65px; height:65px;" class="my-auto">
                                <img src="{{ asset('uploads/wallet/logos/' . $wallet->logo) }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="card-body rounded">
                                <h5 class="card-title">{{ $wallet->name }}</h5>
                                <p class="text-secondary">{{ $wallet->network }}</p>
                                <p class="text-dark">{{ $wallet->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection
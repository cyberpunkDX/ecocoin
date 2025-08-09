@extends('dashboard.user.layouts.master')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center mb-4">{{ $title }}</h1>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <div class="nav-align-top mb-4">

                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        @if (session()->has('bank-withdrawal-success'))
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-justified-crypto" aria-controls="navs-justified-home"
                                aria-selected="true">
                            @else
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-crypto" aria-controls="navs-justified-home"
                                    aria-selected="true">
                        @endif

                        <i class="tf-icons bx bxs-coin-stack"></i> Crypto withdrawal
                        </button>
                    </li>
                    <li class="nav-item">
                        @if (session()->has('bank-withdrawal-success'))
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-justified-bank" aria-controls="navs-justified-profile"
                                aria-selected="false">
                            @else
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-bank" aria-controls="navs-justified-profile"
                                    aria-selected="false">
                        @endif
                        <i class="tf-icons bx bxs-bank"></i> Bank withdrawal
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    @if (session()->has('bank-withdrawal-success'))
                        <div class="tab-pane fade" id="navs-justified-crypto" role="tabpanel">
                        @else
                            <div class="tab-pane fade show active" id="navs-justified-crypto" role="tabpanel">
                    @endif

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Withdraw to crypto wallet</h5>
                            <small class="text-muted float-end"><i class="bx bxs-lock-alt"></i> 256-bit SSL
                                Encrypted</small>
                        </div>
                        <div class="card-body">
                            @include('dashboard.user.layouts.partials.crypto-withdrawal-form')
                        </div>
                    </div>
                </div>

                @if (session()->has('bank-withdrawal-success'))
                    <div class="tab-pane fade show active" id="navs-justified-bank" role="tabpanel">
                    @else
                        <div class="tab-pane fade" id="navs-justified-bank" role="tabpanel">
                @endif
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Withdraw to bank account</h5>
                        <small class="text-muted float-end"><i class="bx bxs-lock-alt"></i> 256-bit
                            SSL
                            Encrypted</small>
                    </div>

                    <div class="card-body">
                        @include('dashboard.user.layouts.partials.bank-transfer-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

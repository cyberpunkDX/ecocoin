
@extends('dashboard.user.layouts.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $transaction->description }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Withdrawal Card -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Withdrawal Details</h5>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Cryptocurrency:</dt>
                            <dd class="col-sm-8">{{ $withdrawal->wallet_name ?? 'N/A' }}</dd>

                            <dt class="col-sm-4">Wallet Address:</dt>
                            <dd class="col-sm-8">{{ $withdrawal->wallet_address ?? 'N/A' }}</dd>

                            <dt class="col-sm-4">Network:</dt>
                            <dd class="col-sm-8">{{ $withdrawal->wallet_address_network ?? 'N/A' }}</dd>
                        </dl>
                    </div>
                </div>

                <!-- Transaction Card -->
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary-subtle text-dark">
                        <h5 class="mb-0">Transaction Details</h5>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Amount:</dt>
                            <dd class="col-sm-8">{{ formatAmount($transaction->amount) }}</dd>

                            <dt class="col-sm-4">Timestamp:</dt>
                            <dd class="col-sm-8">{{ $transaction->created_at->format('F j, Y, g:i A') }}</dd>

                            <dt class="col-sm-4">Status:</dt>
                            <dd class="col-sm-8">
                                <span class="badge 
                                    @if($transaction->status === 'completed') bg-success 
                                    @elseif($transaction->status === 'pending') bg-warning 
                                    @else bg-danger @endif">
                                    {{ ucfirst($transaction->status ?? 'Pending') }}
                                </span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4 d-flex text-center">
                    <a href="{{ route('user.withdraw.index') }}" class="btn btn-outline-secondary me-2">Back to List</a>
                    @if($transaction->status === 'pending')
                        <form action="{{ route('user.withdraw.proceed') }}" method="post">
                            @csrf
                            <input type="hidden" name="transaction_uuid" value="{{ $transaction->uuid }}">
                            <button type="submit" class="btn btn-primary">Confirm Withdrawal</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

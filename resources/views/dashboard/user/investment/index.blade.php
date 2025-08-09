@extends('dashboard.user.layouts.master')
@section('content')
<div class="container">
    <h2>Your Investments</h2>
    @foreach (auth()->user()->investments as $investment)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $investment->product->name }}</h5>
                <p>Invested: ${{ number_format($investment->amount, 2) }}</p>
                <p>ROI: {{ $investment->roi }}% after {{ $investment->duration }} days</p>
                <p>End Date: {{ $investment->end_date }}</p>
                <p>Status: {{ $investment->is_completed ? 'Completed' : 'Active' }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
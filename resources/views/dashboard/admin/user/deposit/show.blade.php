@extends('dashboard.admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ @$title }}</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $title }}</h4>
                        @include('dashboard.admin.partials.account_option')
                    </div>

                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-12 col-sm-4 fw-bold">Pricing Plan</dt>
                            <dd class="col-12 col-sm-8">{{ $deposit->pricing->name }}</dd>

                            <dt class="col-12 col-sm-4 fw-bold">Amount</dt>
                            <dd class="col-12 col-sm-8">{{ formatAmount($deposit->amount, 'symbol', $user->uuid) }}</dd>

                            <dt class="col-12 col-sm-4 fw-bold">Status</dt>
                            <dd class="col-12 col-sm-8">
                                @if ($deposit->status == 'pending')
                                    <span class="badge badge-warning">Pending</span>
                                @elseif ($deposit->status == 'completed')
                                    <span class="badge badge-success">Completed</span>
                                @else
                                    <span class="badge badge-danger">Cancelled</span>
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            @if ($deposit->status == 'pending')
                                <form action="{{ route('admin.user.deposit.complete', [$user->uuid, $deposit->uuid]) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Complete</button>
                                </form>
                                <form action="{{ route('admin.user.deposit.cancel', [$user->uuid, $deposit->uuid]) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

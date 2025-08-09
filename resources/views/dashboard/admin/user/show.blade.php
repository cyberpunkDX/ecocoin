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
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset($user->image) }}" class="img-thumbnail" width="200">
                            </div>
                            <div class="col-12">
                                <dl class="row mb-0">
                                    <dt class="col-12 col-sm-4 fw-bold">Name</dt>
                                    <dd class="col-12 col-sm-8">{{ $user->name }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Email</dt>
                                    <dd class="col-12 col-sm-8">{{ $user->email }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Phone</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $user->dial_code && $user->phone ? $user->dial_code . ' ' . $user->phone : 'Not provided' }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Gender</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $user->gender ? ucfirst($user->gender) : 'Not specified' }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Date of Birth</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ formatDateTime($user->date_of_birth, 'd M Y') }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Currency</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ currency('name', $user->uuid) }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Balance</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ formatAmount($user->account->balance, 'symbol', $user->uuid) }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Expenses</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ formatAmount($user->account->expenses, 'symbol', $user->uuid) }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Profit</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ formatAmount($user->account->profit, 'symbol', $user->uuid) }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Successful withdrawals</dt>
                                    <dd class="col-12 col-sm-8">
                                        @if ($user->account->successful_withdrawals)
                                            <span class="badge badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Status</dt>
                                    <dd class="col-12 col-sm-8">
                                        @if ($user->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('admin.user.edit', $user->uuid) }}" class='btn btn-primary'><i
                                class='fa fa-edit'></i> Edit</a>
                        <a href="{{ route('admin.user.index') }}" class='btn btn-secondary'><i
                                class='fa fa-arrow-left'></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

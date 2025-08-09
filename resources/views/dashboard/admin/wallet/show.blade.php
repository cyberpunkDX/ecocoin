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
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @if ($wallet->image)
                                    <img src="{{ asset($wallet->image) }}" class="img-thumbnail" width="200">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                            <div class="col-12">
                                <dl class="row mb-0">
                                    <dt class="col-12 col-sm-4 fw-bold">Name</dt>
                                    <dd class="col-12 col-sm-8">{{ $wallet->name }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Address</dt>
                                    <dd class="col-12 col-sm-8">{{ $wallet->address }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Logo</dt>
                                    <dd class="col-12 col-sm-8">
                                        @if ($wallet->logo)
                                            <img src="{{ asset($wallet->logo) }}" class="img-thumbnail" width="100">
                                        @else
                                            Not provided
                                        @endif
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Price</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $wallet->price ? formatAmount($wallet->price) : 'Not specified' }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Network</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $wallet->network ?? 'Not specified' }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('admin.wallet.edit', $wallet->uuid) }}" class='btn btn-primary'><i
                                class='fa fa-edit'></i> Edit</a>
                        <a href="{{ route('admin.wallet.index') }}" class='btn btn-secondary'><i
                                class='fa fa-arrow-left'></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

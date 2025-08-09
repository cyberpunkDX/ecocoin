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
                                <dl class="row mb-0">
                                    <dt class="col-12 col-sm-4 fw-bold">Name</dt>
                                    <dd class="col-12 col-sm-8">{{ $pricing->name }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Minimum</dt>
                                    <dd class="col-12 col-sm-8">{{ formatAmount($pricing->minimum) }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Maximum</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $pricing->maximum ? formatAmount($pricing->maximum) : 'Not specified' }}
                                    </dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Features</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $pricing->features }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('admin.pricing.edit', $pricing->uuid) }}" class='btn btn-primary'><i
                                class='fa fa-edit'></i> Edit</a>
                        <a href="{{ route('admin.pricing.index') }}" class='btn btn-secondary'><i
                                class='fa fa-arrow-left'></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

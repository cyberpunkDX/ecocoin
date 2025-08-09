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
                                <img width="200" src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                    class="img-thumbnail">
                            </div>
                            <div class="col-12">
                                <dl class="row mb-0">
                                    <dt class="col-12 col-sm-4 fw-bold">Name</dt>
                                    <dd class="col-12 col-sm-8">{{ $product->name }}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Description</dt>
                                    <dd class="col-12 col-sm-8">{!! $product->description !!}</dd>

                                    <dt class="col-12 col-sm-4 fw-bold">Price</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ formatAmount($product->price) }}
                                    </dd>
                                    <dt class="col-12 col-sm-4 fw-bold">ROI</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $product->roi }}
                                    </dd>
                                    <dt class="col-12 col-sm-4 fw-bold">Duration</dt>
                                    <dd class="col-12 col-sm-8">
                                        {{ $product->duration }}
                                    </dd>
                                    <dt class="col-12 col-sm-4 fw-bold">Status</dt>
                                    <dd class="col-12 col-sm-8">
                                        @if ($product->status == 1)
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
                        <a href="{{ route('admin.product.edit', $product->uuid) }}" class='btn btn-primary'><i
                                class='fa fa-edit'></i> Edit</a>
                        <a href="{{ route('admin.product.index') }}" class='btn btn-secondary'><i
                                class='fa fa-arrow-left'></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

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
                        <form action="{{ route('admin.pricing.update', $pricing->uuid) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $pricing->name) }}"
                                        maxlength="100">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="minimum" class="col-sm-2 col-form-label">Minimum</label>
                                <div class="col-sm-10">
                                    <input type="number" step="0.01"
                                        class="form-control @error('minimum') is-invalid @enderror" id="minimum"
                                        name="minimum" value="{{ old('minimum', $pricing->minimum) }}">
                                    @error('minimum')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="maximum" class="col-sm-2 col-form-label">Maximum</label>
                                <div class="col-sm-10">
                                    <input type="number" step="0.01"
                                        class="form-control @error('maximum') is-invalid @enderror" id="maximum"
                                        name="maximum" value="{{ old('maximum', $pricing->maximum) }}">
                                    @error('maximum')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="features" class="col-sm-2 col-form-label">Features</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('features') is-invalid @enderror" id="features" name="features" rows="3">{{ old('features', $pricing->features) }}</textarea>
                                    @error('features')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-danger">* Please separate each feature with a
                                        comma.</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

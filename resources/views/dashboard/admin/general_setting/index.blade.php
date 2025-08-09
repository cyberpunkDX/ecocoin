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
                        <form action="{{ route('admin.general.setting.update') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-10">
                                    <select id="currency"
                                        class="form-control select2 @error('currency') is-invalid @enderror"
                                        name="currency">
                                        <option value="">Select</option>
                                        @foreach (config('setting.currency') as $key => $currency)
                                            <option
                                                value="{{ $currency['name'] }}-{{ $currency['code'] }}-{{ $currency['symbol'] }}"
                                                {{ @$generalSetting->currency == $currency['name'] . '-' . $currency['code'] . '-' . $currency['symbol'] ? 'selected' : '' }}>
                                                {{ $currency['name'] }} {{ $currency['symbol'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('currency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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

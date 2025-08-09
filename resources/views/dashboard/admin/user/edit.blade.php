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
                        <form action="{{ route('admin.user.update', $user->uuid) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('dial_code') is-invalid @enderror"
                                            name="dial_code" value="{{ old('dial_code', $user->dial_code) }}"
                                            placeholder="+1" style="max-width: 100px;">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ old('phone', $user->phone) }}"
                                            placeholder="Phone Number">
                                    </div>
                                    @error('dial_code')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    @error('phone')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image">
                                    @if ($user->image)
                                        <div class="mt-2">
                                            <img src="{{ asset($user->image) }}" alt="Current Image" class="img-thumbnail"
                                                width="200">
                                        </div>
                                    @endif
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2 @error('gender') is-invalid @enderror"
                                        id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male"
                                            {{ old('gender', $user->gender) === 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female"
                                            {{ old('gender', $user->gender) === 'female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="other"
                                            {{ old('gender', $user->gender) === 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                        id="date_of_birth" name="date_of_birth"
                                        value="{{ old('date_of_birth', $user->date_of_birth) }}">
                                    @error('date_of_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="currency" class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-10">
                                    <select id="currency"
                                        class="form-control select2 @error('currency') is-invalid @enderror"
                                        name="currency">
                                        <option value="">Select</option>
                                        @foreach (config('setting.currency') as $key => $currency)
                                            <option
                                                value="{{ $currency['name'] }}-{{ $currency['code'] }}-{{ $currency['symbol'] }}"
                                                {{ $user->account->currency == $currency['name'] . '-' . $currency['code'] . '-' . $currency['symbol'] ? 'selected' : '' }}>
                                                {{ $currency['name'] }} {{ $currency['symbol'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('currency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="balance" class="col-sm-2 col-form-label">Balance</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('balance') is-invalid @enderror"
                                        id="balance" name="balance"
                                        value="{{ old('balance', $user->account->balance) }}">
                                    @error('balance')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="expenses" class="col-sm-2 col-form-label">Expenses</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('expenses') is-invalid @enderror"
                                        id="expenses" name="expenses"
                                        value="{{ old('expenses', $user->account->expenses) }}">
                                    @error('expenses')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profit" class="col-sm-2 col-form-label">Profit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('profit') is-invalid @enderror"
                                        id="profit" name="profit"
                                        value="{{ old('profit', $user->account->profit) }}">
                                    @error('profit')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="new-password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="successful_withdrawals" class="col-sm-2 col-form-label">Successful
                                    withdrawals</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('successful_withdrawals') is-invalid @enderror"
                                        id="successful_withdrawals" name="successful_withdrawals">
                                        <option value="">Select</option>
                                        <option value="1" @selected($user->account->successful_withdrawals == 1)>Yes</option>
                                        <option value="0" @selected($user->account->successful_withdrawals == 0)>No</option>
                                    </select>
                                    @error('successful_withdrawals')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('status') is-invalid @enderror" id="status"
                                        name="status">
                                        <option value="">Select Status</option>
                                        <option value="1" @selected($user->status == 1)>Active</option>
                                        <option value="0" @selected($user->status == 0)>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.user.show', $user->uuid) }}"
                                        class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

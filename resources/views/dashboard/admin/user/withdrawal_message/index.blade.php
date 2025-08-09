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
                        <form action="{{ route('admin.user.withdrawal.message.store', $user->uuid) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        id="subject" name="subject"
                                        value="{{ old('subject', @$user->withdrawalMessage->subject) }}" required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="message" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" required>{{ old('message', @$user->withdrawalMessage->message) }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

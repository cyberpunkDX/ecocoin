@extends('dashboard.master.layouts.master')
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
                        <a href="{{ route('master.admin.edit', $user->uuid) }}" class='btn btn-primary'><i
                                class='fa fa-edit'></i> Edit</a>
                        <a href="{{ route('master.admin.index') }}" class='btn btn-secondary'><i
                                class='fa fa-arrow-left'></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@extends('dashboard.user.layouts.master')
@section('content')

    <div class="content-wrapper bg-navy" style="min-height: 697px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="mb-4 border-bottom-success">
                            <div class="card-header py-3 d-flex justify-content-between">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    @include('partials.validation_message')
                                    @if ($user->card)
                                        @if ($user->card->cvv != null)
                                            <div class="card-container">
                                                <div class="virtual-card">
                                                    <div class="card-header">
                                                        <div class="card-info">
                                                            <h5>Balance</h5>
                                                            <h3>{{ $user->card ? currency($user->currency) . formatAmount($user->card->balance) : '00' }}
                                                            </h3>
                                                        </div>
                                                        <div class="chip">
                                                            <img class="img-fluid" src="{{ asset('card-terminal.png') }}"
                                                                alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="card-number">
                                                        {{ $user->card ? $user->card->number : '**** *** **** ****' }}
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-details">
                                                            <p>CARD HOLDER</p>
                                                            <span>{{ $user->first_name . ' ' . $user->last_name }}</span>
                                                        </div>
                                                        <div class="card-details">
                                                            <p>VALID THRU</p>
                                                            <span>{{ $user->card ? $user->card->date : '00/00' }}</span>
                                                        </div>
                                                        <img src="{{ asset('master-card.svg') }}" alt="Mastercard Logo"
                                                            class="card-logo">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('user.card.store') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name', $user->name) }}"
                                                        readonly>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="text" class="form-control" id="phone" name="phone"
                                                                value="{{ old('phone', $user->phone) }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email"
                                                                value="{{ old('email', $user->email) }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="type">Type of Card</label>
                                                    <select class="form-control" id="type" name="type" required>
                                                        <option value="">Select</option>
                                                        @foreach ($cardTypes as $key => $cardType)
                                                            <option value="{{ $cardType->value }}">{{ $cardType->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="residential_address">Residential Address</label>
                                                    <input type="text" class="form-control" id="residential_address"
                                                        name="residential_address"
                                                        value="{{ old('residential_address', $user->address) }}" required>
                                                </div>
                                               
                                            
                                                <button type="submit" class="btn btn-primary mt-4">Submit Request</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="card">
                                        <div class="card-header">Card Request Details</div>
                                        <div class="card-body">
                                            @forelse($cards as $key => $card)
                                                <p>Submitted Application Date: {{ $card->date }}</p>
                                                <p>Application Status: {{ $card->status == 0 ? 'Pending' : 'Approved' }}
                                                </p>
                                                <p>Card Type:

                                                    @foreach ($cardTypes as $key => $cardType)
                                                        @if ($card->type == $cardType->value)
                                                            {{ $cardType->name }}
                                                        @endif
                                                    @endforeach
                                                </p>
                                                <hr>
                                            @empty
                                            @include('dashboard.user.layouts.partials.card-details')
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

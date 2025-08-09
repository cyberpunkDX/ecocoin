<div class="card">
    <div class="card-body">
        @if ($user->account->cards->count() > 0)
            @foreach ($user->account->cards as $cards)
                <div class="card bg-success shadow-none rounded-4">
                    <div class="card-body">
                        <span class="float-end w-25 align-items-center justify-content-center text-white-50 display-5 mt-n1">
                            <img class="w-100" src="{{ asset(env('APP_FAVICON')) }}" alt="">
                        </span>
                        <h4 class="text-white">{{ $user->name }}</h4>

                        <div class="row align-items-center mt-4">
                            <div class="col-3 text-white fs-10">
                                {{ $card->number }}
                            </div>
                        </div>

                        <div class="row mt-4 align-items-center">
                            <div class="col-4">
                                <p class="text-white-50 mb-1">Expiry Date</p>
                                <h5 class="text-white my-0">{{ $card->expiry_date }}</h5>
                            </div>

                            <div class="col-4">
                                <p class="text-white-50 mb-1">CVV</p>
                                <h5 class="text-white my-0">{{ $card->cvv }}</h5>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <img src="{{ asset('assets/images/cards/visa-white.svg') }}" alt=""
                                        height="20" class="me-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <h5 class="text-muted">Balance:</h5>
                        <h4 class="fs-18">{{ formatAmount($card->balance) }} <small class="text-muted">USD</small></h4>
                    </div>
                    <a href="javascript:void(0);"
                        class="link-reset text-decoration-underline link-offset-2 fw-semibold pb-2">
                        View Details
                    </a>
                </div>
            @endforeach
        @else
            <div class="card bg-primary rounded-4">
                <div class="card-body">
                    <span class="float-end w-25 align-items-center justify-content-center text-white-50 display-5 mt-n1">
                        <img class="w-100" src="{{ asset(env('APP_FAVICON')) }}" alt="">
                    </span>
                    <h4 class="text-white">{{ $user->name }}</h4>

                    <div class="row align-items-center mt-4">
                        <div class="col-3 text-white fs-10">
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                        </div>
                        <div class="col-3 text-white fs-10">
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                        </div>
                        <div class="col-3 text-white fs-10">
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                            <i class="ti ti-circle-filled"></i>
                        </div>
                        <div class="col-3 text-white fs-16 fw-bold">
                            <span>1</span>
                            <span>0</span>
                            <span>0</span>
                            <span>1</span>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-4">
                            <p class="text-white-50 mb-1">Expiry Date</p>
                            <h5 class="text-white my-0"></h5>
                        </div>

                        <div class="col-4">
                            <p class="text-white-50 mb-1">CVV</p>
                            <h5 class="text-white my-0">000</h5>
                        </div>
                        <div class="col-4">
                            <div class="text-end">
                                <img src="{{ asset('assets/images/cards/visa-white.svg') }}" alt=""
                                    height="20" class="me-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <h5 class="text-muted">Balance:</h5>
                    <h4 class="fs-18">{{ formatAmount(0) }} <small
                            class="text-muted">{{ $user->account->currency }}</small>
                    </h4>
                </div>
                <a href="{{ route('user.card.index') }}"
                    class="link-reset text-decoration-underline link-offset-2 fw-semibold pb-2">
                    Get a Card
                </a>
            </div>
        @endif
    </div>
</div>

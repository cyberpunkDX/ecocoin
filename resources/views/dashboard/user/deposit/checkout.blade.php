@extends('dashboard.user.layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body align-items-center">
            <div class="row">

                <div class="col-md-6 align-items-center mb-4">
                    <div class="mx-auto">
                        <img src="{{ asset('uploads/wallet/logos/' . $wallet->logo) }}" height="100px"
                            width="100px" alt="">
                    </div>

                    <img class="rounded" src={{ asset('uploads/wallet/images/' . $wallet->image) }}
                        width="100%">
                    <hr>

                    <div class="d-flex mb-4 justify-content-center">
                        <div class="input-group">
                            <input type="text" value="{{ $wallet->address }}" class="form-control"
                                aria-label="{{ $wallet->address }}" aria-describedby="button-addon1"
                                id="copyText" />
                            <button class="btn btn-primary" type="button" id="copyButton"
                                data-mdb-ripple-color="dark">
                                <i class="bx bx-file"></i> Copy
                            </button>
                        </div>
                    </div>

                    <a class="mt-4" href="#">
                        <button disabled class="btn btn-success w-100">I have made this payment</button>
                    </a>
                </div>

                <div class="col-md-6 mt-4">
                    <h4>How to make deposit?</h4>
                    <p> One way to make deposit, is to simply copy the company's address to your clipboard, then
                        paste
                        it in the send field of the {{ $wallet->name }} wallet app you're using.
                        <br>
                        The company's wallet address is also displayed in QR code format. If you're sending
                        {{ $wallet->name }} from a
                        mobile wallet like the {{ $wallet->name }}.com Wallet, you can use your phone's camera
                        to scan the QR code of
                        the company's address. This will automatically fill in the address.
                        <br>
                        As for the amount to deposit, most wallets allow you to toggle between showing the send
                        amount as
                        {{ $wallet->name }} (BTC) or showing it in your local currency.
                        Watch the video above in order to get full knowledge on how to get started with your
                        investment
                        journey
                    </p><br>
                    <hr>
                    <h4>How to buy {{ $wallet->name }}</h4>
                    <p>
                        Buying {{ $wallet->name }} has been simplified over the years although there are a good
                        number of steps to
                        follow:
                    <ul>
                        <li>Get a {{ $wallet->name }} wallet</li>
                        <li>Choose a {{ $wallet->name }} exchange</li>
                        <li>Register and complete security checks</li>
                        <li>Add payment Method</li>
                        <li>Make your Payment</li>
                    </ul>
                    <p>
                        So you have a wallet and you have {{ $wallet->name }}s, but if you’ve never been in the
                        {{ $wallet->name }} game before,
                        you may not know how to combine the two.
                        That’s where your wallet ID (or address) comes in. This is sort of like your bank
                        account info
                        that you give to get your check directly deposited into your account each pay period.
                        You’ll
                        enter your address into the proper field each time you buy or trade
                        {{ $wallet->name }}s.
                        Ledger offers a range of {{ $wallet->name }} storage devices. Their most secure wallet
                        is the Ledger Nano S.
                        TREZOR is another option. It generates your {{ $wallet->name }} private keys offline,
                        and it’s the original
                        hardware wallet that was built to secure {{ $wallet->name }}s
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
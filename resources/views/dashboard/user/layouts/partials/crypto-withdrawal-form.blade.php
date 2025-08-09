<form action="{{ route('user.withdraw.crypto.preview') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-12">
            <label for="exampleFormControlSelect1" class="form-label">Name</label>
            <select name="user_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option value={{ $user->id }} selected>
                    {{ $user->name }}
                </option>
            </select>
            @error('user_id')
                <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-6">
            <div class="form-group">
                <label for="amount" class="form-label">Amount</label>
                <input name="amount" type="text" class="form-control" value="{{ old('amount') }}">
                @error('amount')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="address" class="form-label">Crypto</label>
                <input name="wallet_name" type="text" class="form-control" value="{{ old('wallet_name') }}">
                @error('wallet_name')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="wallet_address" class="form-label">Wallet
                    address</label>
                <input name="wallet_address" type="text" class="form-control" value="{{ old('wallet_address') }}">
                @error('wallet_address')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="wallet_address_network" class="form-label">Wallet address network
                    (Optional)</label>
                <input name="wallet_address_network" type="text" class="form-control"
                    value="{{ old('wallet_address_network') }}">
                @error('wallet_address_network')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    @if ($user->account->deposits->count() > 0)
        <button type="submit" class="btn btn-primary w-100">Proceed</button>
    @else
        <button type="submit" class="btn btn-primary w-100" disabled><i class='bx bxs-lock-alt'></i>
            Deposit to unlock</button>
    @endif
</form>

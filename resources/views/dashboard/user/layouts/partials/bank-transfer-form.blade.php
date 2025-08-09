<form action="{{ route('user.withdraw.bank.preview') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-12">
            <label for="exampleFormControlSelect1" class="form-label">Account
                Name</label>

            <input type="text" name="account_name" class="form-control" value="{{ $user->name }}" id="">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            @error('user_id')
                <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <div class="form-group">
                <label for="amount" class="form-label">Amount</label>
                <input name="amount" type="text" class="form-control" value="{{ old('amount') }}">
                @error('amount')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="account_number" class="form-label">Account
                    Number</label>
                <input name="account_number" type="text" class="form-control" value="{{ old('account_number') }}">
                @error('account_number')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="bank_name" class="form-label">Bank Name
                </label>
                <input name="bank_name" type="text" class="form-control" value="{{ old('bank_name') }}">
                @error('bank_name')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="routing_number" class="form-label">Bank
                    Routing
                    Number (optional)</label>
                <input name="routing_number" type="text" class="form-control" value="{{ old('routing_number') }}">
                @error('routing_number')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

    </div>
    <div class="row g-2 mt-3">
        <div class="col">

            @if ($user->account->deposits->count() > 0)
                <button type="submit" class="btn btn-primary w-100">Send Money</button>
            @else
                <button disabled type="submit" class="btn btn-primary w-100">Insufficient
                    Balance</button>
            @endif

        </div>
        <div class="col">
            <a href="#!" class="btn btn-outline-info w-100">Save as Draft</a>
        </div>
    </div>
</form>

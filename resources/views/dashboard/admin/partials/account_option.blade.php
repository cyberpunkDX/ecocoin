<div class="card-header-action">
    <div class="dropdown dropdown d-inline">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Account Options
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item has-icon" href="{{ route('admin.user.show', $user->uuid) }}"><i
                    class="fas fa-user-circle"></i>
                View Profile</a>
            <a class="dropdown-item has-icon" href="{{ route('admin.user.deposit.index', $user->uuid) }}"><i
                    class="fas fa-coins"></i>
                Deposits</a>
            <a class="dropdown-item has-icon" href="{{ route('admin.user.withdrawal.message.index', $user->uuid) }}"><i
                    class="fas fa-envelope"></i>
                Withdrawal Messages</a>
        </div>
    </div>
    <div class="dropdown dropdown d-inline">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Status
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item has-icon" onclick="return confirm('Are you sure?')"
                href="{{ route('admin.user.delete', $user->uuid) }}"><i class="fas fa-user-minus"></i>
                Delete Account</a>
        </div>
    </div>
</div>

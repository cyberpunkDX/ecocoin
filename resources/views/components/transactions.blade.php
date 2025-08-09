@props(['transactions'])
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-wrap align-items-center gap-2">
                <h4 class="header-title me-auto">Transactions <span
                        class="text-muted fw-normal fs-14">({{ $transactions->count() }}
                        Transactions)</span></h4>

                <div class="search-bar">
                    <input type="text" class="form-control form-control-sm search" placeholder="Search Here...">
                </div>

                <div class="w-auto">
                    <select class="form-select form-select-sm">
                        <option selected="">All</option>
                        <option value="0">Paid</option>
                        <option value="1">Cancelled</option>
                        <option value="2">Failed</option>
                        <option value="2">Onhold</option>
                    </select>
                </div>

                <a href="javascript:void(0);" class="btn btn-sm btn-soft-primary">Export <i
                        class="ti ti-file-export ms-1"></i></a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-card">
                    <table class="table table-borderless table-hover table-custom table-nowrap align-middle mb-0">
                        <thead class="bg-light bg-opacity-50 thead-sm">
                            <tr class="text-uppercase fs-12">
                                <th scope="col" class="text-muted">ID</th>
                                <th scope="col" class="text-muted">Type</th>
                                <th scope="col" class="text-muted">Description</th>
                                <th scope="col" class="text-muted">Amount</th>
                                <th scope="col" class="text-muted">Timestamp</th>
                                <th scope="col" class="text-muted">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->uuid }}</td>
                                    <td>{{ $transaction->type }}</td>
                                    <td>{{ limitText($transaction->description) }}</td>
                                    <td>{{ formatAmount($transaction->amount) }}</td>
                                    <td>{{ $transaction->created_at->format('F j, Y, g:i A') }}</td>
                                    <td><span class="badge badge-lg 
                                        @if($transaction->status === 'successful') bg-success 
                                        @elseif($transaction->status === 'pending') bg-warning 
                                        @else bg-danger @endif">
                                        {{ ucfirst($transaction->status ?? 'Pending') }}
                                    </span></td>
                                </tr>
                            @empty
                                <div class="w-100 bg-tertiary h-50">
                                    <td>
                                        <p>No transactions available on your account</p>
                                    </td>
                                </div>
                            @endforelse

                        </tbody>
                    </table><!-- end table -->
                </div><!-- end table responsive -->
            </div> <!-- End Card-body -->
            <div class="card-footer border-top border-light">

            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

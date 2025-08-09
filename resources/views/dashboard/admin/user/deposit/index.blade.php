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
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $deposit)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ formatAmount($deposit->amount, 'symbol', $user->uuid) }}
                                            </td>
                                            <td>
                                                @if ($deposit->status == 'pending')
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif ($deposit->status == 'completed')
                                                    <span class="badge badge-success">Completed</span>
                                                @else
                                                    <span class="badge badge-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.user.deposit.show', [$user->uuid, $deposit->uuid]) }}"
                                                    class='btn btn-info m-2'><i class='fa fa-eye'></i></a>
                                                <a href="{{ route('admin.user.deposit.delete', [$user->uuid, $deposit->uuid]) }}"
                                                    onclick="return confirm('Are you sure?')" class='btn btn-danger m-2'><i
                                                        class='fa fa-trash'></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

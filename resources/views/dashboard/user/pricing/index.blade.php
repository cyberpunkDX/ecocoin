@extends('dashboard.user.layouts.master')
@section('content')
    <div class="row">
        @foreach ($pricings as $pricing)
            <!-- First pricing -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">{{ $pricing->name }}</h4>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Minimum Capital:</td>
                                    <td>{{ formatAmount($pricing->minimum) }}</td>
                                </tr>
                                <tr>
                                    <td>Maximum Capital:</td>
                                    <td>{{ formatAmount($pricing->maximum) }}</td>
                                </tr>

                                <tr>
                                    <td>Profit Withdrawal:</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>ROI:</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Money Back:</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('user.deposit.index') }}" method="post">
                            @csrf
                            <input type="hidden" name="amount" value="{{ $pricing->minimum }}">
                            <button type="submit" class="btn btn-success w-100">Activate</button>
                        </form>
                            

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>{{ $pricings->links() }}</div>
@endsection

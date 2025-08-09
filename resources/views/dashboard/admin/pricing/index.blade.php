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
                        <div class="card-header-action">
                            <a href="{{ route('admin.pricing.create') }}" class="btn btn-primary">Add Pricing</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Name</th>
                                        <th>Minimum</th>
                                        <th>Maximum</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pricings as $pricing)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                    href="{{ route('admin.pricing.show', $pricing->uuid) }}">{{ $pricing->name }}</a>
                                            </td>
                                            <td>
                                                {{ formatAmount($pricing->minimum) }}
                                            </td>
                                            <td>
                                                {{ formatAmount($pricing->maximum) }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.pricing.show', $pricing->uuid) }}"
                                                    class='btn btn-info m-2'><i class='fa fa-eye'></i></a>
                                                <a href="{{ route('admin.pricing.edit', $pricing->uuid) }}"
                                                    class='btn btn-primary'><i class='fa fa-edit'></i></a>
                                                <a href="{{ route('admin.pricing.delete', $pricing->uuid) }}"
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

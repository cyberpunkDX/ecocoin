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
                            <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add Product</a>
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
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>ROI</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                    href="{{ route('admin.product.show', $product->uuid) }}">{{ $product->name }}</a>
                                            </td>
                                            <td><img width="50" src="{{ asset($product->image) }}" alt=""></td>
                                            <td>{{ formatAmount($product->price) }}</td>
                                            <td>{{ $product->roi }} %</td>
                                            <td>{{ $product->duration }} Days</td>
                                            <td>
                                                @if ($product->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.show', $product->uuid) }}"
                                                    class='btn btn-info m-2'><i class='fa fa-eye'></i></a>
                                                <a href="{{ route('admin.product.edit', $product->uuid) }}"
                                                    class='btn btn-primary'><i class='fa fa-edit'></i></a>
                                                <a href="{{ route('admin.product.delete', $product->uuid) }}"
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

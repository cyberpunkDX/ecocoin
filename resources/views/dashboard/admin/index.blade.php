@extends('dashboard.admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $title }}</h4>
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
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                    href="{{ route('admin.user.show', $user->uuid) }}">{{ $user->name }}</a>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.user.show', $user->uuid) }}"
                                                    class='btn btn-info m-2'><i class='fa fa-eye'></i></a>
                                                <a href="{{ route('admin.user.edit', $user->uuid) }}" class='btn btn-primary'><i
                                                        class='fa fa-edit'></i></a>
                                                <a href="{{ route('admin.user.delete', $user->uuid) }}"
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

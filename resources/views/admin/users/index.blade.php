@extends('layouts.app')
@section('page-content')
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
            </h6>
        </div>
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success" >{{ \Illuminate\Support\Facades\Session::get('success') }}</div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Role</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                <img src="{{ asset('storage/ ' . $user->img ) }}" alt="">
                            </td>
                            <td>
                                @if($user->role == \App\Http\Controllers\RoleConstant::ADMIN)
                                    {{ 'admin' }}
                                @else
                                    {{ 'member' }}
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

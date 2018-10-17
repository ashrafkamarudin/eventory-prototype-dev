@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-11">
                    <h1 class="m-0 text-dark">
                        Users
                        @permission('create-users')
                        <a href="{{ url('users/create') }}" class="btn btn-outline-primary pull-right">Add New</a>
                        @endpermission
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="row">
            <div class="col-11">

                @if (session('message'))
                    <div class="callout callout-success alert-dismissible">
                        <button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif

                <div class="card"">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dt" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>E-Mail</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $users as $key => $user )
                                <tr style="font-style: ">
                                    <td class="no">{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                    <td class="no">

                                        @permission('read-users')
                                        <a href="{{ url('users/'.$user->id) }}" title="Edit" class="btn btn-outline-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        @endpermission

                                        @permission('update-users')
                                        <a href="{{ url('users/'.$user->id.'/edit') }}" title="Edit" class="btn btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endpermission

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>

@endsection

@section('script')
    @include('admin.partials.libs.datatables-js')
@endsection

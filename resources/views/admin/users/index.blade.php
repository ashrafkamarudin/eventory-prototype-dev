@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="row">
            <div class="col-12">

                @if (session('message'))
                    <div class="callout callout-success alert-dismissible">
                        <button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif

                <div class="card card-primary card-outline"">
                    <div class="card-header">
                        <a href="{{ url('events/create') }}" class="btn btn-outline-primary">Add New</a>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="event" class="table table-hover">
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
                                    <td>{{ $user->created_at->format('jS \\of F Y - h:i:s A') }}</td>
                                    <td class="no">
                                        <a href="{{ url('events/'.$user->id.'/edit') }}" title="Edit" class="btn btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form style="display: inline" action="{{ url('events/'.$user->id)}}"
                                              method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger" type="submit" onclick="return confirm(' you want to delete?');">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>

@endsection

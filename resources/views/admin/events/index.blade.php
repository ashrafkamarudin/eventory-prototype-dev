@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Events</h1>
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

                        @permission('create-events')
                        <a href="{{ url('events/create') }}" class="btn btn-outline-primary">Add New</a>
                        @endpermission

                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="event" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $events as $key => $event )
                                <tr style="font-style: {{ $event->status == 0 ? ' italic':'' }}">
                                    <td class="no">{{ $key + 1 }}</td>
                                    <td>{{ $event->title }} {{ $event->status == 0 ? ' --Draf':'' }}</td>
                                    <td>{{ $event->user->name }}</td>
                                    <td>{{ $event->created_at->format('jS \\of F Y - h:i:s A') }}</td>
                                    <td class="no">

                                        @permission('edit-events')
                                        <a href="{{ url('events/'.$event->id.'/edit') }}" title="Edit" class="btn btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endpermission

                                        @permission('delete-events')
                                        <form style="display: inline" action="{{ url('events/'.$event->id)}}"
                                              method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger" type="submit" onclick="return confirm(' you want to delete?');">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        @endpermission
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

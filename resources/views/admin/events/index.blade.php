@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-11">
                    <h1 class="m-0 text-dark">
                        Events
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

                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dt" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Start Date - End Date</th>
                                    <th>Created on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $events as $key => $event )
                                <tr style="font-style: {{ $event->status == 0 ? ' italic':'' }}">
                                    <td class="no">{{ $key + 1 }}</td>
                                    <td>{{ $event->title }} {{ $event->status == 0 ? ' --Draf':'' }}</td>
                                    <td>{{ $event->start_at->toFormattedDateString() }} - {{ $event->end_at->toFormattedDateString() }}</td>
                                    <td>{{ $event->created_at->toFormattedDateString() }}</td>
                                    <td>

                                        @permission('read-events')
                                        <a href="{{ url('events/'.$event->id) }}" title="Edit" class="btn btn-outline-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        @endpermission

                                        @permission('update-events')
                                        <a href="{{ url('events/'.$event->id.'/edit') }}" title="Edit" class="btn btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endpermission

                                        @permission('delete-events')
                                        <form style="display: inline;" action="{{ url('events/'.$event->id)}}"
                                              method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm(' you want to delete?');">
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
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>

@endsection

@section('script')
    @include('admin.partials.js.datatables-js')
@endsection

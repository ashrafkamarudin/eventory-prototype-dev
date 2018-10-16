@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Permissions</h1>
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


                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                Permission Name
                            </div>
                            <div class="col-md-4">
                                Display Name
                            </div>
                            <div class="col-md-4">
                                Description
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                @foreach ($permissions as $permission)

                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="margin-top: -8px">
                            <!-- /.card-header -->
                            <div style="padding: 10px">
                                <div class="row">
                                    <div class="col-md-4">
                                        {{ $permission->name }}
                                    </div>
                                    <div class="col-md-4">
                                        {{ $permission->display_name }}
                                    </div>
                                    <div class="col-md-4">
                                        {{ $permission->description }}
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary">Edit</button>
                    </div>
                </div>

                @endforeach
                <!-- /.card -->

            </div>
        </div>

    </section>

@endsection

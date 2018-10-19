@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-md-11">
                <h1 class="m-0 text-dark">Create User</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-11">

            @if (session('message'))
            <div class="callout callout-success alert-dismissible">
                <button aria-hidden="true" class="close close-alert" data-dismiss="alert" type="button">×</button>
                <p>{{ session('message') }}</p>
            </div>
            @endif

            <form method="post" action="{{ url('users') }}" class="col-md-12">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name : </label> 
                                    <input class="form-control" id="name" name="name" placeholder="Enter Username" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail : </label> 
                                    <input class="form-control" id="email" name="email" placeholder="Enter E-Mail" type="email">
                                </div><!-- radio -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password </label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="NoChangePassword" type="radio" checked=""> 
                                        <label class="form-check-label">Default Password, "password"</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" name="ManualChangePassword" type="radio"> 
                                        <label class="form-check-label">Manually Set New Password</label>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <!-- radio -->
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Roles : </label>

                                    @foreach ($roles as $role)
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" name="role" type="radio" value="{{ $role->id }}"> 
                                            <label class="form-check-label">{{ $role->display_name }}</label>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
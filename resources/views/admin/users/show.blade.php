@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-md-11">
                <h1 class="m-0 text-dark">User Profile</h1>
                <hr>
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

                <div class="row">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name : </label> 
                                    <label for="name">{{ $user->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail : </label> 
                                    <label for="name">{{ $user->email }}</label>
                                </div><!-- radio -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role : </label>
                                    @forelse ($user->roles as $role)
                                        <label for="name">{{$role->display_name}} ({{$role->description}})</label>
                                    @empty
                                        <p>This user has not been assigned any roles yet</p>
                                    @endforelse
                                </div>
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection
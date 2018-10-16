@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Roles</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="row">
            <div class="col-md-6 card-columns">

                @if (session('message'))
                    <div class="callout callout-success alert-dismissible">
                        <button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif

                @foreach ($roles as $role)
                
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $role->display_name }}</h5>
                      <h5 style="margin-bottom: 20px"><i>{{ $role->name }}</i></h5>
                      <p class="card-text">
                          {{ $role->description }}
                      </p>
                      <div>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-default">Delete</a>
                      </div>
                    </div>
                  </div>

                @endforeach
                <!-- /.card -->
            </div>
        </div>

    </section>

@endsection

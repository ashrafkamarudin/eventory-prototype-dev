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
            <div class="col-md-11 card-columns">

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
                      <p class="card-text">
                          Role Name : {{ $role->name }}
                          Role Description : {{ $role->description }}
                      </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>

                @endforeach
                <!-- /.card -->
            </div>
        </div>

    </section>

@endsection

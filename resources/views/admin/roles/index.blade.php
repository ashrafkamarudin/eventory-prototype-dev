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
            <div class="col-md-11 card-group">

                @if (session('message'))
                    <div class="callout callout-success alert-dismissible">
                        <button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif

                @foreach ($roles as $role)
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $role->display_name }}</h5>
                      <h5 style="margin-bottom: 20px"><i>{{ $role->name }}</i></h5>
                      <p class="card-text">
                          {{ $role->description }}
                      </p>
                      <div>
                        <a href="" class="btn btn-primary">
                          <i class="fa fa-eye"></i>
                          View
                        </a>
                        <a href="" class="btn btn-default pull-right">
                          <i class="fa fa-edit"></i>
                          Edit
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                  </div>

                @endforeach

            </div>
        </div>

    </section>

@endsection

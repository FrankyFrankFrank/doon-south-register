@extends('layout')

@section('content')

  <div class="container-fluid">

    <div class="row">

      <div class="image-half col-sm-6 hidden-xs">

      </div>

      <div class="form-half col-sm-6">

        <div class="row">
          <div class="col-sm-12">
            <a href="{{ url()->previous() }}" class="btn btn-default pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> ACTIVAHOMES.COM</a>
          </div>
        </div>

        <div id="form" class="row">

          <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
            <h1 class="doon-logo text-center">
              @include('logo')
            </h1>

            <h2 class="text-center">Coming Soon</h2>

          </div>



        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

          <div id="foliage" class="col-xs-12 visible-xs">
            <img alt="Doon South Foliage Background" class="img-responsive" src="{{ asset('img/foliage.gif') }}"/>
          </div>

        </div>

      </div>

    </div><!-- End Row -->

  </div>

@endsection

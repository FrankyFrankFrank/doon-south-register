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
        </div>

        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          {!! Form::open(['route' => 'register.submit','method' => 'post']) !!}

          <!-- First Name -->
          <div class="form-group">
            {!! Form::label('first-name', 'First Name', ['class' => 'control-label sr-only']) !!}
            {!! Form::text('first-name', '', ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
            @if(count($errors->get('first-name')) > 0)
              @foreach($errors->get('first-name') as $error)
              <div class="alert alert-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ $error }}
              </div>
              @endforeach
            @endif
          </div>

          <!-- Last Name -->
          <div class="form-group">
            {!! Form::label('last-name', 'Last Name', ['class' => 'control-label sr-only']) !!}
            {!! Form::text('last-name', '', ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
            @if(count($errors->get('last-name')) > 0)
              @foreach($errors->get('last-name') as $error)
              <div class="alert alert-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ $error }}
              </div>
              @endforeach
            @endif
          </div>

          <!-- Email -->
          <div class="form-group">
            {!! Form::label('email', 'Email Address', ['class' => 'control-label sr-only']) !!}
            {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
            @if(count($errors->get('email')) > 0)
              @foreach($errors->get('email') as $error)
              <div class="alert alert-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ $error }}
              </div>
              @endforeach
            @endif
          </div>

          <!-- Submit -->
          <div class="form-group">
              {!! Form::submit('Register', ['class' => 'btn btn-primary btn-lg center-block hidden-sm hidden-xs']) !!}
              {!! Form::submit('Register', ['class' => 'btn btn-primary btn-lg btn-block visible-sm visible-xs']) !!}

          </div>

          {!! Form::close() !!}
        </div>

      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <p id="disclaimer">By submitting your contact information you are providing consent to be contacted by an Eastforest Homes representative to confirm your reservation. Eastforest Homes may contact you in the future for surveys, events, promotional campaigns and/or purchase offers. Eastforest Homes Ltd., is committed to the consumers' privacy, and it adheres to the strict privacy policy.</p>
        </div>

        <div id="foliage" class="col-xs-12 visible-xs">
          <img alt="Doon South Foliage Background" class="img-responsive" src="{{ asset('img/foliage.gif') }}"/>
        </div>
      </div>

    </div>

  </div><!-- End Row -->

</div>

@endsection

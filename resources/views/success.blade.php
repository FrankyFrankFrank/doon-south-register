<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doon South Registration</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Jquery CDN (sorry)-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!--bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <!--Custom Styles -->
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />

</head>
<body>
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

          @if(isset($success))
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <div class="alert alert-success text-center">
                Thank you! Your registration was submitted.<br />
                <strong>Please confirm by opening the verification email we've just sent.</strong>
              </div>
            </div>
          @endif

        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <a href="{{ url()->previous() }}" class="btn btn-default center-block"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> BACK TO ACTIVAHOMES.COM</a>
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
</body>
</html>

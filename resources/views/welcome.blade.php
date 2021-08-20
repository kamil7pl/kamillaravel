<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('/bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Laravel</title>
  </head>
  <body>
    <div class="container-fluid">
        @include('partials.navbar')
          <div class="content">
              content
          </div>
          @include('partials.footer')
    </div>

    
    <script src="{{asset('/bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
<!DOCTYPE html>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @include( 'layouts.style' )
  <body>
    @include('header.nav')

    
    @yield('content')


    @include('layouts.script')

  </body>
</html>

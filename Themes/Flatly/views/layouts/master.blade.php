<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="Laboratorio de Análisis Clínicos"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daen Lab</title>

    {!! Theme::style('css/style.css') !!}
    @stack('css-stack')
</head>
<body>
<div class="site-content">
  @include('partials.navigation')
  @yield('content')
  @include('partials.footer')
</div>

{!! Theme::script('js/jquery-1.11.1.min.js') !!}
{!! Theme::script('js/plugins.js') !!}
{!! Theme::script('js/app.js') !!}
@yield('scripts')

@stack('js-stack')
</body>
</html>

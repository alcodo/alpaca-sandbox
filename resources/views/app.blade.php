<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('assets/theme/style.css') }}"/>
</head>
<body>

@include('navbar')
@include('sidebar-left')

<div class="container">

    @include('flash::message')
    @include('error')
    @include('block::content')

</div>

<footer>
    <p class="text-center">
        <small>&copy; 2015 Alpaca - LaravelCMF</small>
    </p>
</footer>

<div class="overlay"></div>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script defer src="{{ elixir('assets/theme/script.js') }}"></script>
@yield('scripts')
@include('cookieconsent::bar')
</body>
</html>
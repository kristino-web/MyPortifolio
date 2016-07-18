<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- ==============================================
    CSS
    =============================================== -->  
    {!!Html::style('assets/css/bootstrap.min.css')!!} 
    {!!Html::style('assets/css/flexslider.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('assets/css/styles-1.css')!!}
    {!!Html::style('assets/css/style-switcher.css')!!}
    {!!Html::script('assets/js/libs/modernizr.min.js')!!}

</head>

<body id="app-layout">
    
    @yield('mainNav')


    @yield('content')

    
    {!!Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')!!}
    <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.9.1.min.js">\x3C/script>')</script>
    {!!Html::script('assets/js/libs/bootstrap.min.js')!!}
    {!!Html::script('assets/js/jquery.easing.1.3.min.js')!!}
    {!!Html::script('assets/js/waypoints.min.js')!!}
    {!!Html::script('assets/js/jquery.easypiechart.js')!!}
    {!!Html::script('assets/js/twitterFetcher_min.js')!!}
    {!!Html::script('assets/js/jquery.flexslider.min.js')!!}
    {!!Html::script('assets/js/jquery.fitvids.js')!!}
    {!!Html::script('assets/js/contact.js')!!}
    {!!Html::script('assets/js/scripts.js')!!}
    {!!Html::script('assets/js/style-switcher.js')!!}
    
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('site.title') }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
{{ menu('main', 'menu') }}
<div id="app">
    @yield('content')
</div>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="/js/smooth-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/circliful/1.2.0/js/jquery.circliful.min.js"></script>
<script>
    /**
     * Countdown Number
     */
    $(".countdown-item").each(function () {

        var countdown_percent       = $(this).data('percent');
        var countdown_border_width  = $(this).data('border-width');
        var countdown_counter_width = $(this).data('counter-width');
        var countdown_border_color  = $(this).data('border-color');
        var countdown_counter_color = $(this).data('counter-color');
        var countdown_number_color  = $(this).data('number-color');

        $(this).circliful({
            animationStep: 5,
            foregroundBorderWidth: countdown_counter_width,
            backgroundBorderWidth: countdown_border_width,
            percent: countdown_percent,
            foregroundColor: countdown_counter_color,
            backgroundColor: countdown_border_color,
            fontColor: countdown_number_color,
            percentageY: 110,
            percentageX: 104
        });
    });
</script>
</body>
</html>

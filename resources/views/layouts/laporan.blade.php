<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}{{ isset($title) ? '|' . $title : '' }}</title>
    <link rel="stylesheet" 
    href="https://fonts.googleapis.com/css?family=Source+Sns+Pro:300,400,400i,700&display=allback">
        <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
        @stack('style')
</head>
<body onload="javascript:window.print()">
    @yield('content')
</body>
</html>
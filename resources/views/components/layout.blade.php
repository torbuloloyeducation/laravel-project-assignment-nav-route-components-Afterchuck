<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<style>
    *{
        background-color: grey;
        margin: 2px;
        box-sizing: border-box
    }
</style>
<body>
    <x-navbar />
    {{ $slot }}
</body>
</html>

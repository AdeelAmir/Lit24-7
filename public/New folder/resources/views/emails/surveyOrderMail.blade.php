<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mail</title>
</head>
<body>
    <h3>You have a New Survey Record Order from User : {{ $data['user']->name }}.</h3>
    <h4>Property Address : {{$data['address']}}</h4>
    <h4>Block : {{$data['block']}}</h4>
    <h4>Lot : {{$data['lot']}}</h4>
    @if($data['section'])
    <h4>Section : {{$data['section']}}</h4>
    @endif
</body>
</html>
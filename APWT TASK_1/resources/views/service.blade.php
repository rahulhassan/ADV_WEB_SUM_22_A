<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
</head>
<body>
@extends('layouts.navigation')
@section('content')
    <h1>This is Service Page</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Services</th>
        </tr>
        @foreach($services as $s)
            <tr>
                <td>{{$no}}</td>
                <td>{{$s}}</td>
            </tr>
            <?php $no++; ?>
        @endforeach
    </table>
</body>
</html>
@endsection
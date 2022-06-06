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
@endsection

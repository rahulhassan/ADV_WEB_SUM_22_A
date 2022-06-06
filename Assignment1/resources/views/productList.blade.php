@extends('layout.navigation')
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $p)
      <tr>
        <th scope="row">{{$p->ID}}</th>
        <td><a href="product/details/{{$p->ID}}/{{$p->Name}}/{{$p->Price}}">{{$p->Name}}</a></td>
        <td>{{$p->Price}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>

@endsection
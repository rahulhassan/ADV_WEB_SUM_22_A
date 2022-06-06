@extends('layout.navigation')
@section('content')
<br>
<form action="{{route('submit.product')}}" method="post">
    {{@csrf_field()}}
    <label>Product Name</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Product Name">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label>Product Price</label>
    <input type="text" name="price" value="{{old('price')}}" class="form-control" placeholder="Enter Product Price">
    @error('price')
    <span>{{$message}}</span>
    @enderror
    <br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

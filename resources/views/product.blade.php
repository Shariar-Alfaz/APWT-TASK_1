@extends('layouts.main')
@section('content')
   <h1>This is product service page</h1>

   <table border="1">
       <tr>
           <th>Name</th>
           <th>Product id</th>
       </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->id}}</td>
        </tr>
    @endforeach
   </table>
@endsection
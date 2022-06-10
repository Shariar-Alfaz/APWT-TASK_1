@extends('layouts.main')
@section('content')
   <h1>This is our team page</h1>

   <table border="1">
       <tr>
           <th>Name</th>
           <th>Id</th>
       </tr>
    @foreach($teams as $team)
        <tr>
            <td>{{$team->name}}</td>
            <td>{{$team->id}}</td>
        </tr>
    @endforeach
   </table>
@endsection
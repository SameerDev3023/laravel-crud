@extends('layouts.main-wrapper')
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   @push('title')
    <title>Show data</title>
    <style>
      table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}
    </style>
</head>
<body>
<h1 class="bg-success p-3 mt-5 m-2 text-center text-white rounded-pill">Please See your Data </h1>
    <table border="1px" class="table mt-3" >
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Course Name</th>
          <th scope="col">Number</th>
          <th scope="col">City</th>
          <th scope="col">Address</th>
          <th scope="col" colspan="2">Commands</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usersData as $users)
        <tr>
          <td>{{$users->first_name}}</td>
          <td>{{$users->last_name}}</td>
          <td>{{$users->course_name}}</td>
          <td>{{$users->number}}</td>
          <td>{{$users->city}}</td>
          <td>{{$users->address}}</td>
          <td class="bg-danger text-white rounded text-center"><a href="{{url('/delete')}}/{{$users->user_id}}">Delete</a></td>
          <td class="bg-success text-white  text-center rounded"><a href="{{url('/edit')}}/{{$users->user_id}}">Edit</a></td>




        </tr>
       @endforeach
      </tbody>
    </table>
</body>
</html>
@endsection
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
    <title>Add data</title>
</head>
<body>
<h1 class="bg-success p-3 mt-5 m-2 text-center text-white rounded-pill">{{$title}}</h1>
 <div class="container m-5">
    <div class="form-wrapper">
        <form action="{{$url}}" method="post"class="border m-2 p-3 border-danger rounded">
            @csrf
        <x-form-handler type="text" label="First Name" name="first_name" value="{{$userData->first_name}}"/>
        <x-form-handler type="text" label="Last Name" name="last_name"  value="{{$userData->last_name}}"/>
        <x-form-handler type="text" label="Course Name" name="course_name"  value="{{$userData->course_name}}"/>
        <x-form-handler type="text" label="Number" name="number"  value="{{$userData->number}}"/>
        <x-form-handler type="text" label="City" name="city"  value="{{$userData->city}}"/>
        <x-form-handler type="text" label="Address" name="address"  value="{{$userData->address}}"/> 
     
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>  
</body>
</html>
@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sample Edit </title>
</head>
<body>
    <form action = "/book/{{$book->id}}/edit" method="post">
     PUT-> <input  type = "hidden"  name = "_method"  value = "PUT" > 
   <input  type = "hidden  "  name = " _token "  value = "{{csrf_token()}}" > 
   <div  class = " form-group " > 
        <label  for = "name" > book title </label> 
        <input  type = "text"  class = "form-control"  name = "name" value = "{{$book-> name}}" > 
    </div> 
    <div  class ="form-group" > 
         <label  for = "price" > price </label> 
          <input  type = "text"  class = "form-control"  name = "price"  value = "{{$book-> price}} " > 
     </div> 
     <div  class = "form-group" > 
         <label  for = " author " > author </label> 
         <input  type = " text "  class = "form-control"  name = "author"  value = "{{$book->author}}" > 
      </div> 
      <button  type = "submit"  class ="Btn Btn-Default" > Register </button> 
      <a  href= "book" > Back </a> 
    </form>
</body>
</html> -->
@extends('book/layout')
@section('content')
@include('book/form', ['target' => 'update'])
<!-- <form action = "/book/{{$book->id}}/edit" method="post">
  <input  type = "hidden"  name = "_method"  value = "PUT" > 
   <input  type = "hidden"  name = " _token "  value = "{{csrf_token()}}" > 
   <div  class = " form-group " > 
        <label  for = "name" > book title </label> 
        <input  type = "text"  class = "form-control"  name = "name" value = "{{$book-> name}}" > 
    </div> 
    <div  class ="form-group" > 
         <label  for = "price" > price </label> 
          <input  type = "text"  class = "form-control"  name = "price"  value = "{{$book-> price}} " > 
     </div> 
     <div  class = "form-group" > 
         <label  for = " author " > author </label> 
         <input  type = " text "  class = "form-control"  name = "author"  value = "{{$book->author}}" > 
      </div> 
      <button  type = "submit"  class ="Btn Btn-Default" > Register </button> 
      <a  href= "book" > Back </a> 
    </form> -->
@endsection
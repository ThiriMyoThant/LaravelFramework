<!-- <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <div  class = "container ops-main" > 
<div  class = "row" > 
  <div  class = "col-md-12" > 
    <h3  class = "ops-title" > Book list </ h3> 
  </div> 
</div> 
<div  class = "row" > 
  <div  class = "col-md-11 col-md-offset-1" > 

  <table  class ="table text-center" > 
      <tr> 
        <th  class = "text-center" > ID </th> 
        <th  class = "text-center" > book title </th> 
        <th  class = "text-center" > Price </th> 
        <th  class = "text-center" > Author </th> 
        <th  class = "text-center" > Delete </th> 
      </tr>
      @foreach($books as $book)
      <tr> 
        <td> 
          <a  href= "/book/{{$book->id}}/edit" > {{$book->id}} </a> 
        </td> 
        <td> {{$book->name}} </td> 
        <td> {{$book->price}} </td> 
        <td> {{$book->author}} </td> 
        <td> 
          <form  action = "/book/{{$book->id}}"  method = "post" > 
            <input  type = " hidden"  name = "_method"  value = "DELETE" > 
            <input  type = "hidden"  name = "_token"  value = "{{csrf_token()}}" >
            <button  type = "submit"  class = "btn btn-xs btn-danger"  aria-label = "Left Align" > <span  class = "glyphicon glyphicon-trash" > </span> </button> 
          </form> 
        </td> 
      </tr>
       @endforeach
    </table>
    <div> <A  href= "/book/create"  Class= "Btn Btn-default"> New </A> </ Div> 
  </div> 
</div>
  </body>
  </html> -->
@extends('book/layout')
@section('content')
@endsection
<div  class = "container ops-main" > 
<div  class = "row" > 
  <div  class = "col-md-12" > 
    <h3  class = "ops-title" > Book list </ h3> 
  </div> 
</div> 
<div  class = "row" > 
  <div  class = "col-md-11 col-md-offset-1" > 

  <table  class ="table text-center" > 
      <tr> 
        <th  class = "text-center" > ID </th> 
        <th  class = "text-center" > book title </th> 
        <th  class = "text-center" > Price </th> 
        <th  class = "text-center" > Author </th> 
        <th  class = "text-center" > Delete </th> 
      </tr>
      @foreach($books as $book)
      <tr> 
        <td> 
          <a  href= "/book/{{$book->id}}/edit" > {{$book->id}} </a> 
        </td> 
        <td> {{$book->name}} </td> 
        <td> {{$book->price}} </td> 
        <td> {{$book->author}} </td> 
        <td> 
          <form  action = "/book/{{$book->id}}"  method = "post" > 
            <input  type = " hidden"  name = "_method"  value = "DELETE" > 
            <input  type = "hidden"  name = "_token"  value = "{{csrf_token()}}" >
            <button  type = "submit"  class = "btn btn-xs btn-danger"  aria-label = "Left Align" > <span  class = "glyphicon glyphicon-trash" > </span> </button> 
          </form> 
        </td> 
      </tr>
       @endforeach
    </table>
    <div> <A  href= "/book/create"  Class= "Btn Btn-default"> New </A> </ Div> 
  </div> 
</div>
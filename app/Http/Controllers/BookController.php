<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public  function  index() 
    { 
        
        // $rd = getcwd();
        // echo dirname("/home/Asub") .PHP_EOL;
        // print_r($rd);

        //  $Dir = '/home';

        // if(file_exists($Dir))
        // {
        //    $subFolder = $Dir.'/Csub';
        //    \File::makeDirectory($subFolder,0777);
        //    if(file_exists($subFolder))
        //    {
        //      echo "Created SubFolder" ,   $subFolder;
        //    }else
        //    {
        //      echo "Aleady";
        //    }
        // }
        // else
        // {
        //   if(mkdir($Dir,0777))
        //   {
        //   echo "Created";
        //   }else
        //   {
        //      echo"Fail";
        //   }
        // }
       

      // Get all Book table values ​​from DB 
          $books  = Book :: all ();
          // return view('book.test',compact('test_1'));
          return view('book.index',compact('books'));

       //    print_r("$books");
     //   pass the retrieved value to the view "book / index" 
      //   return  view( 'book/index' ,  compact( 'books' )); 
      //  view('welcome');
    }


    public function edit ($id)
    {
      $book = Book :: findOrFail($id);
      // eval(\Psy\sh());
      return view ('book.edit',compact('book'));
    }

    public function update(Request $request , $id)
    {
       $book = Book::findOrFail($id);
       $book->name =  $request->name;
       $book->price = $request->price;
       $book->author = $request->author;
       $book->save();
       return redirect("/book");
    }

   public function destroy($id)
   {
    $book = Book::findOrFail($id);
    $book->delete();
    return redirect("/book");
    }

    public function create()
    {
    // 空の$bookを渡す
    $book = new Book();
    // print_r($book);
      return view('book.create', compact('book'));
     }

   public function show(Request $request)
     {
    $book = new Book();
   
    $book->name = $request->name;
    $book->price = $request->price;
    $book->author = $request->author;
    $book->save();

    return redirect("/book");
   }
}

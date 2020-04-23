<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table( 'books' )->truncate();
    
        // Prepare initial data (associative array with column name as key) 
        $books  =  [ 
                  [ 'name'  =>  'PHP Book' , 
                    'price'  =>  2000 , 
                    'author'  =>  'PHPER' ], 
                  [ 'name'  =>  ' Laravel Book ' , 
                    'price'  =>  3000 , 
                    'author'  =>  null ]
                 ];
    
        // Register 
        foreach ( $books  as  $book )  { 
          \App\Book :: create( $book ); 
        } 
    }
}

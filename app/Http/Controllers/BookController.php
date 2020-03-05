<?php

namespace App\Http\Controllers;

use App\book;
use App\Http\APIHelper\BookAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function show(){
        // $books = DB::table('book')->get();
        $books = book::all();
        return view('book', ['books' => $books]);
    }

    public function showAddView(){
        return view('book_insert');
    }

    public function insert(Request $request){
        book::create([
            'title' => $request->title,
            'publisher' => $request->publisher,
            'image' => $request->imageUrl
        ]);
        return redirect('book');
    }

    public function showUpdateView($id){
        // $book = DB::table('book')->where('id', $id)->get();
        $book = book::where('id', $id)->get();
        return view('book_update', ['book' => $book]);
    }

    public function update(Request $request){
        // DB::table('books')->where('id', $request->id)->update([
        //     'title' => $request->title,
        //     'publisher' => $request->publisher,
        //     'image' => $request->imageUrl
        // ]);
        $book = book::find($request->id);
        $book->title = $request->title;
        $book->publisher = $request->publisher;
        $book->image = $request->imageUrl;
        $book->save();
        return redirect('book');
    }

    public function delete($id){
        DB::table('books')->where('id', $id)->delete();
        return redirect('book');
    }

    public function showBookGoogle(){
        $books = BookAPI::getBooks();
        return $books;
    }
}

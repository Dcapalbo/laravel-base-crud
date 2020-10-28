<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view("index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
          // "isbn" => "required|
          "title" => "reguired|max 30",
          "author" => "required|max 50",
          "genre" => "required|max 30",
          "edition" => "required|max 30",
          "description" => "required|max 3000",
          "pages" => "required",
          "year" => "required"

        ]);

        $book = new Book;
        $book->isbn = $data["isbn"];
        $book->title = $data["title"];
        $book->author = $data["author"];
        $book->genre = $data["genre"];
        $book->edition = $data["edition"];
        $book->description = $data["description"];
        $book->pages = $data["pages"];
        $book->year = $data["year"];

        $book->save();
        dd($book);
        return redirect()->route('books.show', $book);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);
        return view("show", compact("books"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $books)
    {
        return view('edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = $request->all();

      $request->validate([

        "title" => "reguired|max 30",
        "author" => "required|max 50",
        "genre" => "required|max 30",
        "edition" => "required|max 30",
        "description" => "required|max 3000",
        "pages" => "required",
        "year" => "required",

      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

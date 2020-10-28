<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

        $request->validate(

          [
          "isbn" => "required|unique:books|size:13",
          "title" => "reguired|max 30",
          "author" => "required|max 50",
          "genre" => "required|max 30",
          "edition" => "required|max 30",
          "description" => "required|max 3000",
          "pages" => "required",
          "year" => "required"
          ]
        );

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

        return redirect()->route('books.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view("show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
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
      $book = Book::find($id);

      $book->isbn = $data["isbn"];
      $book->title = $data["title"];
      $book->author = $data["author"];
      $book->genre = $data["genre"];
      $book->edition = $data["edition"];
      $book->image = $data["description"];
      $book->pages = $data["pages"];
      $book->year = $data["year"];

      $request->validate([
        "isbn" => [
          "required",
          Rule::unique('books')->ignore($id),
          "size:13"
        ],
        "title" => "reguired|max 30",
        "author" => "required|max 50",
        "genre" => "required|max 30",
        "edition" => "required|max 30",
        "description" => "required|max 3000",
        "pages" => "required",
        "year" => "required",
      ]);

        $book->update();
        return redirect()->route("books.update", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $book = Book::find($id);

      $book->delete();

      return redirect()->route("books.index");
    }
}

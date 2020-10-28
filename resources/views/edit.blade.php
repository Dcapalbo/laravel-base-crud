<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/app.css">
    <title>laravel-base-crud</title>
  </head>
  <body>
    <form action="{{route('books.destroy', $book->$id)}}" method="POST">
      @method('DELETE')
      @csrf
      <input name="_method" type="hidden" value="POST">
      <div class="">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="title" id="title" value="{{$books->title}}">
      </div>
      <div class="">
        <label for="author">Author</label>
        <input type="text" name="author" placeholder="author" id="author" value="{{$books->author}}">
      </div>
      <div class="">
        <label for="genre">Genre</label>
        <input type="text" name="genre" placeholder="genre" id="genre" value="{{$books->genre}}">
      </div>
      <div class="">
        <label for="edition">Editor</label>
        <input type="text" name="edition" placeholder="edition" id="edition" value="{{$books->edition}}">
      </div>
      <div class="">
        <label for="description">Description</label>
        <input type="text" name="description" placeholder="description" id="description" value="{{$books->description}}">
      </div>
      <div class="">
        <label for="pages">Pages</label>
        <input type="number" name="pages" placeholder="number of pages" id="pages" value="{{$books->pages}}">
      </div>
      <div class="">
        <label for="year">Date</label>
        <input type="date" name="date" placeholder="date" id="year" value="{{$books->year}}">
      </div>
      <input type="submit" value="Save">
    </form>
  </body>
</html>

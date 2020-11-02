<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title></title>
  </head>
  <body>
    <h1>Modify</h1>    
    <form action="{{route('books.update', $book)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="">
        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" placeholder="ISBN" id="isbn" value="{{$book->isbn}}">
      </div>
      <div class="">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="title" id="title" value="{{$book->title}}">
      </div>
      <div class="">
        <label for="author">Author</label>
        <input type="text" name="author" placeholder="author" id="author" value="{{$book->author}}">
      </div>
      <div class="">
        <label for="genre">Genre</label>
        <input type="text" name="genre" placeholder="genre" id="genre" value="{{$book->genre}}">
      </div>
      <div class="">
        <label for="edition">Editor</label>
        <input type="text" name="edition" placeholder="edition" id="edition" value="{{$book->edition}}">
      </div>
      <div class="">
        <label for="description">Description</label>
        <input type="text" name="description" placeholder="description" id="description" value="{{$book->description}}">
      </div>
      <div class=""> 
        <label for="pages">Pages</label>
        <input type="number" name="pages" placeholder="number of pages" id="pages" value="{{$book->pages}}">
      </div>
      <div class="">
        <label for="year">Date</label>
        <input type="date" name="date" placeholder="date" id="year" value="{{$book->year}}">
      </div>
      <input type="submit" value="Modify">
    </form>
    <form action="{{route('books.destroy', $book)}}" method="POST">
      @csrf
      @method("DELETE")
      <br>
      <input type="submit" value="Delete">
      </form>
    @if ($errors->any())
     <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
      </ul>
     </div>
    @endif

  </body>
</html>

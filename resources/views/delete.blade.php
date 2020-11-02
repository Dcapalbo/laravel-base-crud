<form action="{{route("books.destroy", $book->id)}}" method="POST">
    @csrf
    @method("DELETE")

    <input type="submit" value="delete">
  </form>
@extends('template')

@section('title', 'List')

@section('content')
<div class='container'>
 <table class="table">
 @forelse ($booklist as $book)

    <td><a href="{{ url('/books', [$book->id]) }}">Details</a> </td>
    <td> <a href="{{ url('/books', [$book->id, 'edit'])}}">Edit</a> </td>
    <td> <a href="{{ url('/books', [$book->id, 'delete'])}}">Delete</a> </td>

 <tr>
 <td>{{$book->title }}</td>
 <td>{{$book->year }}</td>
 <td>{{$book->publication_place }}</td>
 <td>{{$book->pages }}</td>
 <td>{{$book->price }}</td>

 <!-- show method of book controller -->
 <td><a href="{{ url('/books', [$book->id]) }}">Details</a>
</td>

 </tr>
 @empty
 Book list is empty!
 @endforelse
 </table>
</div>
@endsection

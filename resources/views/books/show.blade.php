@extends('template')

@section('title', 'Details')

@section('content')
<div class="container">
    <h2>Book details</h2>
    <tr>
        <td><h4>title</h4></td>
        <td>{{$book->title}}</td>
    </tr>
    <tr>
        <td><h4>year</h4></td>
        <td>{{$book->year}}</td>
    </tr>
    <tr>
        <td><h4>publication_place</h4></td>
        <td>{{$book->publication_place}}</td>
    </tr>
    <tr>
        <td><h4>pages</h4></td>
        <td>{{$book->pages}}</td>
    </tr>
    <tr>
        <td><h4>price</h4></td>
        <td>{{$book->price}}</td>
    </tr>
    <tr>
        <td><h4>publisher</h4></td>
        <td>{{$book->publisher}}</td>
    </tr>

    @isset($book->isbn)
    <tr>
        <td><h4>ISBN number</h4></td>
        <td>{{$book->isbn->number}}</td>
    </tr>
    <tr>
        <td><h4>Issued by</h4></td>
        <td>{{$book->isbn->issued_by }}</td>
    </tr>
    <tr>
        <td><h4>Date of ISBN</h4></td>
        <td>{{$book->isbn->issued_on }}</td>
    </tr>
    @endisset
</div>
@endsection

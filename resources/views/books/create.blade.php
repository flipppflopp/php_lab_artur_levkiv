@extends('template')

@section('title', 'Create')

@section('content')
<form action="{{ action('App\Http\Controllers\BookController@store')
}}" method="POST" role ="form">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="year">Year:</label><br>
        <input type="text" id="year" name="year"><br>

        <label for="publication_place">Publication Place:</label><br>
        <input type="text" id="publication_place" name="publication_place"><br>

        <label for="pages">Pages:</label><br>
        <input type="text" id="pages" name="pages"><br>

        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>

        <label for="publisher">Publisher:</label><br>
        <input type="text" id="publisher" name="publisher"><br>

        <input type="submit" value="Submit">
</form>
@endsection

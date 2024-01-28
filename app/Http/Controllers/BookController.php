<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Isbn;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Book $book)
    {
        $booklist = $book->all();
        //examples of searching for data in the database using Eloquent ORM
        //$booklist=$book::get();
        //$booklist=$book::where('price', '>', 60)->get();
        //$booklist=$book::where('title', 'like', 'H%')->get();
        //$booklist=$book::where('price', '>=', 55)->orWhere('title', 'like', 'H%')->get();
        //$booklist=$book::whereBetween('pages', [500, 700])->get();
        //$booksCount=$book::count();
        //echo "the number of books is $booksCount"; // ++comment return!
        //$max=$book::max('price');
        //echo "the maximum value of price is $max"; // ++comment return!
        //$booklist=$book::distinct()->get();
        //$booklist=$book::orderBy('title', 'desc')->get();

        $bookWithMinPages = $book->orderBy('pages')->first();

        $booksPublishedInWarsaw = $book->where('publisher', 'Warsaw')->get();

        $booksWithMinPages = $book->orderBy('pages')->limit(3)->get();

        return view('books/list', ['booklist'=> $booklist]);
        //die();
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books/show',['book' => $book]);
    }

    public function rules()
    {
        return view('books/rules');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = new Book();
        $book->title = "Computer Networking: A Top-Down Approach";
        $book->year = 2018;
        $book->publication_place = "London";
        $book->pages = 764;
        $book->price = 101.00;
        $book->publisher = "publisher IsBn";
        $book->save();
        $isbn = new Isbn([ 'number' => '32145678', 'issued_by' =>
        'Publisher2', 'issued_on' => '2016-06-06']);
        $book->isbn()->save($isbn);
        return redirect('books');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $book = new Book();
        $book->fill($data);
        $book->save();
        return redirect('books');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

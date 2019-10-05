<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Careers;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        return view('books.books', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers=Careers::all();
        $categories=Category::all();

        return view('books.NewBook', ['careers'=>$careers, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careers=Careers::all();
        $categories=Category::all();
        $book_id=$id;
        $book=Book::find($book_id);
        $selectedCareer = Careers::first()->id;
        $selectedCategory = Category::first()->id;
        return view('books.UpdateBook', ['book'=>$book, 'careers'=>$careers, 'categories'=>$categories], compact('selectedCareer', 'selectedCategory'));
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
        $book=Book::find($id);
        $book->title=$request->title;
        $book->isbn=$request->isbn;
        $book->author=$request->author;
        $book->career_id=$request->career_id;
        $book->category_id=$request->category_id;
        $book->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::destroy($id);
        return redirect('/books');
    }
}

<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view ('book', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'synopsis' => 'required',
            'tanggal_rilis' => 'required',
            'halaman' => 'required',
            'cover' => 'required|sometimes|image|mimes:jpg,jpeg,svg,png|max:90000',
            'image' => 'required|sometimes|image|mimes:jpg,jpeg,svg,png|max:90000',
        ]);
        
            $cover = $request->file('cover');   
            $image = $request->file('image');
            $nameCover = time().'.'.$cover->getClientOriginalExtension();
            $nameImage = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/img/book/');
            $cover->move($path, $nameCover);
            $image->move($path, $nameImage);
            Book::create([
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'synopsis' => $request->synopsis,
                'tanggal_rilis' => $request->tanggal_rilis,
                'halaman' => $request->halaman, 
                'cover' => $nameCover,
                'image' => $nameImage,
            ]);
            
        $books = Book::all();

        return view ('book', ['books' => $books]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view ('editbook', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->judul = $request->judul;
        $book->pengarang = $request->pengarang;
        $book->penerbit = $request->penerbit;
        $book->synopsis = $request->synopsis;
        $book->tanggal_rilis = $request->tanggal_rilis;
        $book->halaman = $request->halaman;
            
        File::delete(public_path($book->cover));
        $cover = $request->file('cover');
        $name = time().'.'.$cover->getClientOriginalExtension();
        $path = public_path('/img/book/');
        $cover->move($path, $name);
        $book->cover = '/img/book/'.$name;
        
        $book->update();
        return redirect ('/Book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        File::delete(public_path($book->cover));
        return redirect ('/Book');
    }
}
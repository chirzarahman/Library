@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Book</div>

                <div class="card-body">
                    <form method="POST" action="/edit-book/{{ $book->id }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">Cover</label>

                            <div class="col-md-6">
                                <img id="cover" src="{{ $book->cover }}" alt="Cover" class="thumbnail mb-2" width="150" height="100" />
                                <input id="cover" type="file" onchange="document.getElementById('cover').src = window.URL.createObjectURL(this.files[0])" name="cover">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <img id="image" src="{{ $book->image }}" alt="No Image" class="thumbnail mb-2" width="150" height="100" />
                                <input id="image" type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">Judul</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $book->judul }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengarang" class="col-md-4 col-form-label text-md-right">Pengarang</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ $book->pengarang }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penerbit" class="col-md-4 col-form-label text-md-right">Penerbit</label>

                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ $book->penerbit }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="synopsis" class="col-md-4 col-form-label text-md-right">Synopsis</label>

                            <div class="col-md-6">
                                <textarea id="synopsis" type="text" class="form-control" name="synopsis" required> {{ $book->synopsis }} </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_rilis" class="col-md-4 col-form-label text-md-right">Tanggal Rilis</label>

                            <div class="col-md-6">
                                <input id="tanggal_rilis" type="text" class="form-control" name="tanggal_rilis" value="{{ $book->tanggal_rilis }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="halaman" class="col-md-4 col-form-label text-md-right">Halaman</label>

                            <div class="col-md-6">
                                <input id="halaman" type="number" class="form-control" name="halaman" value="{{ $book->halaman }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
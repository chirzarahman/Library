@extends('layouts.main')

@section('title', 'Library - Add Book')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Book</div>

                <div class="card-body">
                    <form method="POST" action="{{ url ('/add-book') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">Cover</label>

                            <div class="col-md-6">
                                <img id="cover" alt="Cover" class="thumbnail" width="100" height="100" />
                                <input id="cover" type="file" onchange="document.getElementById('cover').src = window.URL.createObjectURL(this.files[0])" name="cover" required>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <img id="image" alt="No Image" class="thumbnail" width="100" height="100" />
                                <input id="image" type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="image" required>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">Judul</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="judul" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengarang" class="col-md-4 col-form-label text-md-right">Pengarang</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penerbit" class="col-md-4 col-form-label text-md-right">Penerbit</label>

                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="synopsis" class="col-md-4 col-form-label text-md-right">Synopsis</label>

                            <div class="col-md-6">
                                <textarea id="synopsis" type="text" class="form-control" name="synopsis" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_rilis" class="col-md-4 col-form-label text-md-right">Tanggal Rilis</label>

                            <div class="col-md-6">
                                <input id="tanggal_rilis" type="text" class="form-control" name="tanggal_rilis" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="halaman" class="col-md-4 col-form-label text-md-right">Halaman</label>

                            <div class="col-md-6">
                                <input id="halaman" type="number" class="form-control" name="halaman" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
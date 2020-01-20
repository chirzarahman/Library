@extends('layouts.main')

@section('title', 'Library - My Book')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My Book</div>
                <div class="card-body">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                            <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Halaman</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            @foreach($books as $book)
                            <tr>
                                <td> {{$id}} </td>
                                <td> <img src="{{$book->cover}}" class="thumbnail" width="100" height="60"> </td>
                                <td> {{$book->judul}} </td>
                                <td> {{$book->penerbit}} </td>
                                <td> {{$book->halaman}} Halaman</td>
                                <td>
                                    <a href='/Edit Book/{{ $book->id }}' class="badge badge-success">Detail</a>
                                    <form action="/delete/{{ $book->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-danger"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                            <?php $id++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
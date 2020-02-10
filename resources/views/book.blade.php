@extends('layouts.main')

@section('title', 'Library - My Book')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Book</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                <a href='/Edit Book/{{ $book->id }}' class="btn btn-primary">Edit</a>
                                                <form action="/delete/{{ $book->id }}" method="post" class="d-inline">
                                                  @method('delete')
                                                  @csrf
                                                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
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
</div>

@endsection
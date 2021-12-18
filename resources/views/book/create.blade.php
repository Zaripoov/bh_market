@extends('layouts.app')



@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h2>Добавить книгу</h2>
            <form method="post" action="{{ route('book.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label>Имя книги</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Имя книги">
                </div>
                <div class="form-group mb-3">
                    <label>Автор книги</label>
                    <input type="text" class="form-control" name="author_book" id="author_book" placeholder="Автор книги">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success alert-success fade show" role="alert">
                {{session('success')}}
            </div>
        @endif
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My books') }} - <a href="{{ route('book.create') }}">{{ __('Add book') }}</a></div>

                <div class="card-body">
                    @if(!$books->isEmpty())
                        @foreach($books as $book)
                            <div>
                                {{ $book->name }} :: {{$book->author_book}}
                            </div>
                        @endforeach
                    @else
                        {{ __('Add your books!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

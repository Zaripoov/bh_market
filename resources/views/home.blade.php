@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Books') }}</div>

                    <div class="card-body">
                        @if(!$books->isEmpty())
                            @foreach($books as $book)
                                <div>
                                    {{ $book->name }} :: {{$book->author_book}}
                                </div>
                            @endforeach
                        @else
                            {{ __('You are logged in!') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

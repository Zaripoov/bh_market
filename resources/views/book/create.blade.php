@extends('layouts.app')



@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h2>{{ __('Add book') }}</h2>
            <form method="post" action="{{ route('book.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label>{{__('Book name') }}</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{__('Book name') }}">
                </div>
                <div class="form-group mb-3">
                    <label>{{__('Book author')}}</label>
                    <input type="text" class="form-control" name="author_book" id="author_book" placeholder="{{__('Book author')}}">
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection

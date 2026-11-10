{{-- @extends('layouts.app')
@section('content')



<form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

         <label for="title">title:</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}"><br><br>
        <label for="author">author:</label>
        <input type="text" id="author" name="author" value="{{ $book->author }}"><br><br>
        <label for="category">publication year :</label>
        <input type="number" id="publication_year" name="publication_year" value="{{ $book->publication_year }}"><br><br>



        <button type="submit" style="color: rgb(207, 241, 13)">update</button>
    </form>

@endsection --}}



@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white py-3">
                        <h4 class="mb-0 text-warning">Edit Book Details</h4>
                    </div>
                    <div class="card-body p-4">

                        <form action="{{ route('book.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">title:</label>
                                <input type="text" id="title" name="title" value="{{ $book->title }}"
                                    class="form-control">
                                @error('title')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label fw-bold">author:</label>
                                <input type="text" id="author" name="author" value="{{ $book->author }}"
                                    class="form-control">

                                @error('author')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="publication_year" class="form-label fw-bold">publication year :</label>
                                <input type="number" id="publication_year" name="publication_year"
                                    value="{{ $book->publication_year }}" class="form-control">

                                @error('publication_year')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="is_available" class="form-label fw-bold">is available :</label>
                                <input type="number" id="is_available" name="is_available"
                                    value="{{ $book->is_available }}" class="form-control">

                                @error('is_available')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <h3 class="mb-0 text-warning">Edit cover Details</h3><br>


                            <div class="mb-4">


                                <label for="color" class="form-label fw-bold">cover color :</label>
                                <input type="text" id="color" name="color" value="{{ $book->cover?->color }}"
                                    class="form-control">
                                @error('color')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror




                            </div>

                            <div class="mb-4">


                                <label for="format" class="form-label fw-bold"> cover format :</label>
                                <input type="text" id="format" name="format" value="{{ $book->cover?->format }}"
                                    class="form-control">
                                @error('format')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning fw-bold text-dark">update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

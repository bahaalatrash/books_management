    {{-- @extends('layouts.app')
    @section('content')
        <h4 style="color: greenyellow"> enter your book details down below , description optional</h4>

        <form action="{{ route('book.store') }}" method="Post">
            @csrf
            <label for="title">title:</label>
            <input type="text" id="title" name="title"><br><br>
            <label for="author">author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="category">publication year :</label>
            <input type="number" id="publication_year" name="publication_year"><br><br>



            <div>
                <label>
                    choose Categories :
                </label>
                @foreach ($categories as $category)
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label for="cat_{{ $category->id }}"> {{ $category->name }}</label>
                @endforeach
            </div>



            <x-button type="primary" text="create"></x-button>

        </form>
    @endsection --}}


    @extends('layouts.app')
    @section('content')
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-dark text-white py-3">
                            <h4 class="mb-0 text-success">enter your book details down below , description optional</h4>
                        </div>
                        <div class="card-body p-4">

                            <form action="{{ route('book.store') }}" method="Post">
                                @csrf

                                <div class="mb-3">
                                    <label for="title" class="form-label fw-bold">title:</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="author" class="form-label fw-bold">author:</label>
                                    <input type="text" id="author" name="author" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="publication_year" class="form-label fw-bold">publication year :</label>
                                    <input type="number" id="publication_year" name="publication_year"
                                        class="form-control">
                                </div>
                                
                                  <div class="mb-3">
                                    <label for="description" class="form-label fw-bold">description :</label>
                                    <input type="text" id="description" name="description"
                                        class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold d-block">
                                        choose Categories :
                                    </label>
                                    <div class="d-flex flex-wrap gap-3">
                                        @foreach ($categories as $category)
                                            <div class="form-check">
                                                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                                    id="cat_{{ $category->id }}" class="form-check-input">
                                                <label for="cat_{{ $category->id }}" class="form-check-label">
                                                    {{ $category->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <h3 class="mb-0 text-success">cover details,  optional</h3><br>


                                <div class="mb-4">
                                    <label for="color" class="form-label fw-bold">cover color :</label>
                                    <input type="text" id="color" name="color" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="format" class="form-label fw-bold"> cover format :</label>
                                    <input type="text" id="format" name="format" class="form-control">
                                </div>






                                <div class="d-grid">
                                    <x-button type="primary" text="create"></x-button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

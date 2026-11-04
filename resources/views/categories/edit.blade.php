{{--
@extends('layouts.app')
@section('content')



<form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

         <label for="name">name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}"><br><br>




        <button type="submit" style="color: rgb(207, 241, 13)">update</button>
    </form>

@endsection --}}



@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white py-3">
                    <h4 class="mb-0 text-warning">Edit Category Details</h4>
                </div>
                <div class="card-body p-4">

                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">name:</label>
                            <input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control">
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

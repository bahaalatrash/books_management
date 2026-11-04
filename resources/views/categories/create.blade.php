{{--
@extends('layouts.app')
@section('content')
    <h4 style="color: greenyellow"> enter your category name down below </h4>

    <form action="{{ route('category.store') }}" method="Post">
        @csrf
        <label for="name">name:</label>
        <input type="text" id="name" name="name"><br><br>


        <x-button type="primary" text="create"></x-button>


    </form>
@endsection --}}
@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white py-3">
                    <h4 class="mb-0 text-success">enter your category name down below</h4>
                </div>
                <div class="card-body p-4">

                    <form action="{{ route('category.store') }}" method="Post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">name:</label>
                            <input type="text" id="name" name="name" class="form-control">
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

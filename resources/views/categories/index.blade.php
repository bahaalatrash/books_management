{{-- @extends('layouts.app')
@section('content')
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th style="color: blue">name</th>
                <th> actions </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>



                        <x-link href="{{ route('category.edit', $category->id) }}" type="primary"> edit </x-link>

                        <form action="{{ route('category.destroy', $category->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <x-button type="danger" text="Delete"></x-button>

                        </form>
                    </td>








                </tr>
            @endforeach
        </tbody>
    </table>
    <x-link href="{{ route('category.create') }}" type="primary"> create category </x-link>
    <x-link href="{{ route('books.index') }}" type="primary"> back to home </x-link>


@endsection --}}


@extends('layouts.app')
@section('content')

<div class="container my-4">
    <!-- رأس الصفحة مع أزرار التنقل والإضافة -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-success">Categories List</h2>
        <div>
            <x-link href="{{ route('category.create') }}" type="success" class="me-2"> create category </x-link>
            <x-link href="{{ route('books.index') }}" type="success" class="me-2"> back to home </x-link>
        </div>
    </div>

    <!-- جدول عرض التصنيفات -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped-columns table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th class="text-info">name</th>
                            <th class="text-center"> actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th>{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <x-link href="{{ route('category.edit', $category->id) }}" type="warning"> edit </x-link>

                                        <form action="{{ route('category.destroy', $category->id) }}" method="Post" class="m-0">
                                            @csrf
                                            @method('DELETE')
                                            <x-button type="danger" text="Delete"></x-button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

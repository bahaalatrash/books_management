{{--
@extends('layouts.app')
@section('content')
    <h2 style="color: greenyellow"> Books </h2>

    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th style="color: blue">title</th>
                <th>author</th>
                <th style="color: blue">publication year</th>
                <th>is available</th>

                <th> actions </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th>{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->is_available }}</td>

                    <td>
                        <x-link href="{{ route('book.show', $book->id) }}" type="primary">show details</x-link>
                        <x-link href="{{ route('book.edit', $book->id) }}" type="primary"> edit </x-link>

                        <form action="{{ route('book.destroy', $book->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <x-button type="danger" text="Delete"></x-button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $books->links() }}
    </div>

    <x-link href="{{ route('book.create') }}" type="primary"> create new book </x-link>
    <x-link href="{{ route('categories.index') }}" type="primary"> show categories </x-link>


@endsection --}}

@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <!-- رأس الصفحة مع زر الإضافة -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Books</h2>
            <div>
                <x-link href="{{ route('book.create') }}" type="success" class="me-2">create new book</x-link>
                <x-link href="{{ route('categories.index') }}" type="success" class="me-2">show categories</x-link>
            </div>
        </div>

        <!-- جدول عرض الكتب -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped-columns table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-info">title</th>
                                <th>author</th>
                                <th class="text-info">publication year</th>
                                <th>is available</th>
                                {{-- <th>cover color</th>
                            <th>cover format </th> --}}
                                <th class="text-center">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th>{{ $book->id }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->publication_year }}</td>
                                    <td>
                                        <span class="badge {{ $book->is_available ? 'bg-success' : 'bg-danger' }}">
                                            {{ $book->is_available ? 'Available' : 'Not Available' }}
                                        </span>
                                    </td>
                                    {{-- <td>{{ $book->cover->color }}</td>
                                <td>{{ $book->cover->format }}</td> --}}
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            <x-link href="{{ route('book.show', $book->id) }}" type="primary">show
                                                details</x-link>
                                            <x-link href="{{ route('book.edit', $book->id) }}" type="warning"> edit
                                            </x-link>

                                            <form action="{{ route('book.destroy', $book->id) }}" method="Post"
                                                class="m-0">
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

        <!-- الترقيم (Pagination) -->
        <div class="d-flex justify-content-center mt-4">
            {{ $books->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

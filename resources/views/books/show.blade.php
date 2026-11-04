{{-- @extends('layouts.app')
@section('content')




<h3> title: {{ $book->title }}</h3>
<h3> author: {{ $book->author }}</h3>
<h3> publication year: {{ $book->publication_year }}</h3>
<h3> available: {{ $book->is_available ? 'Available' : 'Not Available' }}</h3>

@if($book->cover)
    <h3> cover color: {{ $book->cover->color }}</h3>
    <h3> cover format: {{ $book->cover->format }}</h3>
@endif

<h3>
    @if($book->categories && count($book->categories) > 0)
       categories:  {{ $book->categories->pluck('name')->implode(', ') }}
    @else
        No Categories
    @endif
</h3>
<h3>
    @if($book->reviews && count($book->reviews) > 0)
       reviews details :
       @foreach ($book->reviews as $review)
<p>reviewer_name:  {{ $review->reviewer_name}} , rating: {{  $review->rating}} , comment: {{  $review->comment}} .</p>


       @endforeach
    @else
        No reviewers
    @endif
</h3>




@endsection --}}












@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0">Book Detials</h4>
                </div>
                <div class="card-body p-4">

                    <div class="mb-3">
                        <span class="text-muted d-block">Title</span>
                        <h3 class="h4 fw-bold text-dark">{{ $book->title }}</h3>
                    </div>

                    <div class="mb-3">
                        <span class="text-muted d-block">Author</span>
                        <h3 class="h5 text-secondary">{{ $book->author }}</h3>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <span class="text-muted d-block">Publication Year</span>
                            <h3 class="h6 fw-semibold">{{ $book->publication_year }}</h3>
                        </div>
                        <div class="col-sm-6">
                            <span class="text-muted d-block">Availability Status</span>
                            <h3>
                                <span class="badge {{ $book->is_available ? 'bg-success' : 'bg-danger' }}">
                                    {{ $book->is_available ? 'Available' : 'Not Available' }}
                                </span>
                            </h3>
                        </div>
                    </div>

                    @if($book->cover)
                        <hr class="my-4">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <span class="text-muted d-block">Cover Color</span>
                                <h3 class="h6">{{ $book->cover->color }}</h3>
                            </div>
                            <div class="col-sm-6">
                                <span class="text-muted d-block">Cover Format</span>
                                <h3 class="h6">{{ $book->cover->format }}</h3>
                            </div>
                        </div>
                    @endif

                    <hr class="my-4">
                    <div class="mb-3">
                        <span class="text-muted d-block mb-2">Categories</span>
                        <h3>
                            @if($book->categories && count($book->categories) > 0)
                                <span class="badge bg-secondary me-1">{{ $book->categories->pluck('name')->implode(', ') }}</span>
                            @else
                                <span class="text-muted fst-italic">No Categories</span>
                            @endif
                        </h3>
                    </div>

                    <hr class="my-4">
                    <div class="mb-3">
                        <span class="text-muted d-block mb-3">Reviews Details</span>
                        <h3>
                            @if($book->reviews && count($book->reviews) > 0)
                                <div class="list-group">
                                    @foreach ($book->reviews as $review)
                                        <div class="list-group-item list-group-item-action mb-2 rounded border">
                                            <p class="mb-1"><strong>reviewer_name:</strong> {{ $review->reviewer_name}}</p>
                                            <p class="mb-1"><strong>rating:</strong> <span class="badge bg-warning text-dark">{{ $review->rating }}</span></p>
                                            <p class="mb-0 text-muted"><strong>comment:</strong> {{ $review->comment}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <span class="text-muted fst-italic">No reviewers</span>
                            @endif
                        </h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection




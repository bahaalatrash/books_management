<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(StoreReviewRequest $request)
    {

        $review = Review::query()->create($request->validated());

        return response()->json([
            "message" => "review created successfully",
            "review" => $review
        ]);
    }
}

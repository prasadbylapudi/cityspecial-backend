<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostInteraction;

class PostInteractionController extends Controller
{  
    public function getAllInteractions()
{
    // Fetch all interactions grouped by post_id and type
    $interactions = PostInteraction::select('post_id', 'type', 'user_identifier')
        ->get()
        ->groupBy('post_id')
        ->map(function ($groupedInteractions) {
            return $groupedInteractions->groupBy('type');
        });

    return response()->json([
        'message' => 'All interactions fetched successfully!',
        'interactions' => $interactions,
    ]);
}

   public function store(Request $request)
        {
            // Validate and create a new interaction
            $validated = $request->validate([
                'post_id' => 'required|exists:posts,id',
                'user_identifier' => 'required|string',
                'type' => 'required|in:like,dislike,poop',
            ]);

            // Prevent duplicate interactions
            $existing = PostInteraction::where([
                ['post_id', '=', $validated['post_id']],
                ['user_identifier', '=', $validated['user_identifier']],
                ['type', '=', $validated['type']],
            ])->first();

            if ($existing) {
                return response()->json(['message' => 'Interaction already exists'], 409);
            }

            // Create the interaction
            $interaction = PostInteraction::create($validated);

            return response()->json([
                'message' => ucfirst($validated['type']) . ' interaction recorded successfully!',
                'interaction' => $interaction,
            ], 201);
        }

public function destroy(Request $request)
{
    $validated = $request->validate([
        'post_id' => 'required|exists:posts,id',
        'user_identifier' => 'required|string',
        'type' => 'required|in:like,dislike,poop',
    ]);

    $interaction = PostInteraction::where($validated)->first();

    if ($interaction) {
        $interaction->delete();
        return response()->json(['message' => 'Interaction removed successfully'], 200);
    }

    return response()->json(['message' => 'Interaction not found'], 404);
}

}

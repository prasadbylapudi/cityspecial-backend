<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class PostController extends Controller
{
    //
    public function index()
    {
        
        // Fetch all posts with interactions
        return Post::with('interactions')->get();
    }


        public function store(Request $request)
        {   
            
            //log info
            Log::info('data from frontend is : ', $request->all());
        // Validate and create a new post
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'email' => 'required|email',
                'description' => 'required|string',
                'category' => 'required|string|max:255',
                'image_url' => 'required|url',
                'location' => 'required|string|max:255',
            ]);

            // Log::info('posted Data:', $validated);

        $post = Post::create($validated);

            return response()->json("ok");
        }

    public function show($id)
    {
        // Fetch a specific post with interactions
        return Post::with('interactions')->findOrFail($id);
    }
}

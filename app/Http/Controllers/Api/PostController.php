<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Http\Resources\PostResource;
use App\ImageInput;
use App\Post;
use App\UploadedImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function index()
    {
        $posts = Post::latest()
            ->paginate(5);
        return PostResource::collection($posts);
    }

    public function store(StorePost $request, ImageInput $image)
    {
        $validated = $request->validated();
        $validated['image'] = $image->path();

        $post = Post::create($validated);
        return new PostResource($post);
    }

    public function update(UpdatePost $request,  ImageInput $image, $id)
    {
        $validated = $request->validated();
        $validated['image'] =  $image->path();

        $post = Post::find($id);
        $post->fill($validated);
        $post->save();
        return new PostResource($post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }


}

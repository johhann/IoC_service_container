<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Publication;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Interfaces\SocialMediaServiceInterface;

class PostController extends Controller
{
    protected $socialMediaService;

    public function __construct(SocialMediaServiceInterface $socialMediaService)
    {
        $this->socialMediaService = $socialMediaService;
        // dd($this->publication);
    }

    public function publish(Post $post)
    {
        $post->publish();

        $this->socialize($post);
    }

    protected function socialize($post)
    {
        $this->socialMediaService->share($post);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // return $request->all();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('http://172.17.104.10:8000/api/login', [
            'email' => $request->email,
            'password' => $request->password
        ]);

        $body = json_decode($response->body());

        return $token = $body->data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

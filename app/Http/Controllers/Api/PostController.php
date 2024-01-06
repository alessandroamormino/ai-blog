<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
	// LIST
	public function list(){
		$posts = Post::query()
			->where('active', true)
			->orderBy('published_at','desc')
			->get();

		return response()->json([
			'success' => true,
			'results' => $posts
		]);
	}

	// DETAIL
	public function detail($slug){
		$post = Post::query()
			->where('active', true)
			->where('slug', $slug)
			->orderBy('published_at','desc')
			->get();

		return response()->json([
			'success'=> true,
			'results'=> $post
		]);
	}

	// ADD
	public function add(Request $request){
		$request->query->add([
			'slug'=> Str::slug($request->title, '-')
		]);
		if (!$request->thumbnail) {
			$request->query->add([
				'thumbnail'=> 'placeholder.jpg'
			]);
		}
		if (!$request->active){
			$request->query->add([
				'active'=> '0'
			]);
		}
		$post = Post::create($request->all());
		return response()->json([
			'success'=> true,
			'results'=> $post
		]);
	}
}

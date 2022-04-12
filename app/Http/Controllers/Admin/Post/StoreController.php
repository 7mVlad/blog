<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        // $data['main-image'] = Storage::put('/images', $data['main-image']);
        // for($i = 1; $i < 6; $i++) {
        //     $data['image-'.$i] = Storage::put('/images', $data['image-'.$i]);
        // }
        dd($data);

        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');

    }
}

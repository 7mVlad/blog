<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Film\StoreRequest;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['main-image'] = Storage::put('/image/film', $data['main-image']);
        $data['image-1'] = Storage::put('/image/film/test', $data['image-1']);
        $data['image-2'] = Storage::put('/image/film/test', $data['image-2']);
        $data['image-3'] = Storage::put('/image/film/test', $data['image-3']);
        $data['image-4'] = Storage::put('/image/film/test', $data['image-4']);
        $data['image-5'] = Storage::put('/image/film/test', $data['image-5']);

        Film::firstOrCreate($data);
        return redirect()->route('admin.film.index');

    }
}

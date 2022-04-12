<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['main-image'] = Storage::put('/imgs', $data['main-image']);
        for($i = 1; $i < 6; $i++) {
            if(empty(['image-'.$i])) {
                $data['image-'.$i] = Storage::put('/imgs', $data['image-'.$i]);
            }

        }
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');

    }
}

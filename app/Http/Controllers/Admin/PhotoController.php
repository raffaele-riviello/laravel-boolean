<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    public function store(Request $request) {
       
        $data = $request->all();
        $path = Storage::disk('public')->put('images', $data['path']);
        dd($path);

    }

    public function update(Request $request, $id) {
        // simulate request
        $photo = [
            'id' => 1,
            'title' => 'Titolo 1',
            'description' => 'questo testo',
            'path' => 'images/iNp8fK0KZQxzGDBakGKkK2LUNMMwIaTDiyOXPev4.jpeg'
        ];   

        $data = $request->all();
        if(isset($data['path'])) {
            Storage::disk('public')->delete($photo['path']);
        }
        //if there is $data['path'] delete old image and then upload a new one
        // otherwise upload other data

    }
}
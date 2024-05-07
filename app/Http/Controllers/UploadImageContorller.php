<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UploadImageContorller extends Controller
{
    public function index(){
        $images = Image::get();
        return response(['data' => $images, 'status' => 200]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $data['disk_path'] = $request->file('image')
            ->store('prew', 'posts');

        $file = $request->file('image');
        if ($file) {
            $data['filename'] = $file->getClientOriginalName();
            $data['mime_type'] = $file->getMimeType();
            $data['size'] = $file->getSize();
            $data['name'] = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $image = new Image($data);
            $image->save();
        }


        return redirect('/api/images')->with('success', 'Image uploaded successfully');
    }
}

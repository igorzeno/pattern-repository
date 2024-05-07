<?php

namespace App\Http\Controllers;

use App\Jobs\UploadVideoJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadVideoController extends Controller
{
    public function __invoke(Request $request)
    {
        if($url = $request->url){
            UploadVideoJob::dispatch($request->url);
            return response()->json([
                'message' => 'Successful'
            ]);
        }
    }
}

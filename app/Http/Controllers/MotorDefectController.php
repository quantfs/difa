<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Http\Resources\Motor\DefectsResource;
use App\Models\MotorDefect;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Storage;

class MotorDefectController extends Controller
{
    public function index() {
        $motorDetail = MotorDefect::all();
        //dd($motorDetail);

        return DefectsResource::collection($motorDetail);
    }

//    public function getImage_()
//    {
//        $image = Image::find(1);
//
//        if ($image) {
//            return response()->json([
//                'success' => true,
//                'image' => $image,
//            ]);
//        } else {
//            return response()->json([
//                'error' => 'Image not found',
//            ]);
//        }
//    }

    public function getImage_(Request $request): BinaryFileResponse {
        //dd(123456);
        //$file = $request->input('file');
        $file = "esp/Motor/1. Масло/1.3.Черное, потемневшее масло.png";
        $path = Storage::disk('public')->path($file);
        return response()->download($path, "Oil.png");
    }

    public function getImage(Request $request) {
        $file = "esp/Motor/2.jpg";

        $path = Storage::disk('public')->path('img//image_1707893464628_b0224f629f32972f58959f06a049dda0.png');

        $imageData = file_get_contents($path);
        $decodedImage = base64_encode($imageData);
        return response()->json(['image' => $decodedImage]);


        return response()->download($path, "Oil.jpg");
        //return response()->json(['path' => $path]);
    }

    public function getTakenPhoto() {
        dd(123);
    }
}

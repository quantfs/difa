<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MotorImage extends Model
{
    use HasFactory;
    protected $appends = ['data'];
    public function getDataAttribute() : string
    {
        $path = Storage::disk('public')->path($this->path);

        $imageData = file_get_contents($path);
        return base64_encode($imageData);
    }
}

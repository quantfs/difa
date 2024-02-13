<?php

namespace App\Http\Controllers;

use App\Models\MotorDetail;
use Illuminate\Http\Request;

class MotorDetailController extends Controller
{
    public function index() {
        $motorDetail = MotorDetail::all();

        return $motorDetail;
    }
}

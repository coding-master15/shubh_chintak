<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuccessStory;

class ApiController extends Controller
{
    public function __construct(){}

    public function getStories($request) {
        return SuccessStory::get();
    }
}

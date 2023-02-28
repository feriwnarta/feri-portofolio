<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestDataController extends Controller
{


    public function data() {
        $authors = DB::select('SELECT * FROM authors');

        return $authors;
    }
}

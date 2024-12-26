<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SecondMigration;
use Illuminate\Http\Request;

class SecondMigrationController extends Controller
{
    public function index() {
        $str = SecondMigration::find(1, 'years');
        dd($str);
    }
}

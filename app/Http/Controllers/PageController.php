<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return '244107020140 Muhammad Rizki';
    }

    public function articles($articleId) {
        return 'Article page with ID ' . $articleId;
    }
}

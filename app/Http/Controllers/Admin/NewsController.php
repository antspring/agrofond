<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    public $modelName = News::class;

    public function index()
    {
        $news = News::all();

        return view('admin_panel.pages.news', [
            'news' => $news
        ]);
    }
}
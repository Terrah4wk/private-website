<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    public function __construct()
    {
        self::getPageMeta();
    }

    /**
     * Index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home', []);
    }
    
    /**
     * About me
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutMe()
    {
        return view('about-me', []);
    }
    
    /**
     * Curriculum vitae
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cv()
    {
        return view('cv', []);
    }
    
    /**
     * Imprint
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function imprint()
    {
        $imprint_content = env('IMPRINT_CONTENT');
        return view('imprint', ['imprint_content' => $imprint_content]);
    }
    
    /*
     * Get page Meta
     */
    public static function getPageMeta()
    {
        $name = (string) Route::currentRouteName();
        $pageMeta = Cache::remember('page_meta'.$name, 1, function () use ($name) {
            return DB::table('page_meta')
                ->select()
                ->where('page_meta.route', '=', $name)->first();
        });

        View::share('pageMeta', $pageMeta);
    }


}
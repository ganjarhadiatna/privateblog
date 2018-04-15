<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SettingModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = SettingModel::GetLogo('logo');
        $banner = SettingModel::GetLogo('banner');
        $ttl = SettingModel::GetTitle();
        $info = SettingModel::GetInfo();
        return view('home', [
            'logo' => $logo,
            'banner' => $banner,
            'ttl' => $ttl,
            'info' => $info
        ]);
    }
}

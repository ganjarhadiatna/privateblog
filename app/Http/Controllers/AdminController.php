<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SettingModel;

class AdminController extends Controller
{
    function index()
    {
    	return view('admin.dashboard');
    }
    function settingLogo()
    {
        return view('admin.settings.logo');
    }
    function settingTitle()
    {
    	$ttl = SettingModel::GetTitle();
    	return view('admin.settings.title', ['ttl' => $ttl]);
    }
    function settingInfoAdd()
    {
    	return view('admin.compose.info');
    }
    function settingInfoEdit($id)
    {
    	$info = SettingModel::GetInfoId($id);
    	return view('admin.edit.info', ['info' => $info, 'id' => $id]);
    }
    function settingInfo()
    {
    	$info = SettingModel::GetInfo();
    	return view('admin.settings.info', ['info' => $info]);
    }

    function settingIcon()
    {
    	$icon = SettingModel::GetIcon();
    	return view('admin.settings.icon', ['icon' => $icon]);
    }
    function settingIconAdd()
    {
    	return view('admin.compose.icon');
    }
    function settingIconEdit($id)
    {
    	$icon = SettingModel::GetIconId($id);
    	return view('admin.edit.icon', ['icon' => $icon, 'id' => $id]);
    }

}

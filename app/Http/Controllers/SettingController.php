<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\SettingModel;

class SettingController extends Controller
{
    function saveLogo(Request $req)
    {
        $id = Auth::id();
        $this->validate($req, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ]);
        $id = Auth::id();
        $image = $req->file('image');
        $chrc = array('[',']','@',' ','+','-','#','*','<','>','_','(',')',';',',','&','%','$','!','`','~','=','{','}','/',':','?','"',"'",'^');
        $filelogo = $id.time().str_replace($chrc, '', $image->getClientOriginalName());

        //saving image to server
        try {
            $data = [
                'image' => $filelogo,
                'type' => 'logo',
                'id' => $id
            ];
            $rest = SettingModel::UpdateLogo($data, 'logo');
            if (!is_int($rest)) {
                $data = [
                    'image' => $filelogo,
                    'type' => 'logo',
                    'id' => $id
                ];
                SettingModel::SaveLogo($data);
            }
            $destination = public_path('img/logo');
            $image->move($destination, $filelogo);
            echo "success";
        } catch (Exception $e) {
            echo $e;
        }
    }
    function saveBanner(Request $req)
    {
        $id = Auth::id();
        $this->validate($req, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ]);
        $id = Auth::id();
        $image = $req->file('image');
        $chrc = array('[',']','@',' ','+','-','#','*','<','>','_','(',')',';',',','&','%','$','!','`','~','=','{','}','/',':','?','"',"'",'^');
        $filebanner = $id.time().str_replace($chrc, '', $image->getClientOriginalName());

        //saving image to server
        try {
            $data = [
                'image' => $filebanner,
                'type' => 'banner',
                'id' => $id
            ];
            $rest = SettingModel::UpdateLogo($data, 'banner');
            if (!is_int($rest)) {
                $data = [
                    'image' => $filebanner,
                    'type' => 'banner',
                    'id' => $id
                ];
                SettingModel::SaveLogo($data);
            }
            $destination = public_path('img/banner');
            $image->move($destination, $filebanner);
            echo "success";
        } catch (Exception $e) {
            echo $e;
        }
    }

    function saveTitle(Request $req)
    {
    	$id = Auth::id();
    	$title = $req['title'];
    	$subtitle = $req['subtitle'];
    	$data = array('title' => $title, 'subtitle' => $subtitle, 'id' => $id);
    	$rest = SettingModel::SaveTitle($data);
    	echo $rest;
    }

    function saveInfo(Request $req)
    {
    	$id = Auth::id();
    	$title = $req['title'];
    	$descr = $req['descr'];
    	$data = array('title' => $title, 'descr' => $descr, 'id' => $id);
    	$rest = SettingModel::SaveInfo($data);
    	echo $rest;
    }

    function editInfo(Request $req)
    {
    	$id = Auth::id();
    	$idsiteabout = $req['idsiteabout'];
    	$title = $req['title'];
    	$descr = $req['descr'];
    	$data = array('title' => $title, 'descr' => $descr, 'id' => $id);
    	$rest = SettingModel::EditInfo($data, $idsiteabout);
    	echo $rest;
    }
    function deleteInfo(Request $req)
    {
    	$id = Auth::id();
    	$idsiteabout = $req['idsiteabout'];
    	$rest = SettingModel::DeleteInfo($idsiteabout);
    	echo $rest;
    }

    function saveIcon(Request $req)
    {
    	$id = Auth::id();
    	$code = $req['code'];
    	$title = $req['title'];
    	$descr = $req['descr'];
    	$data = array('code' => $code, 'title' => $title, 'descr' => $descr, 'id' => $id);
    	$rest = SettingModel::SaveIcon($data);
    	echo $rest;
    }

    function editIcon(Request $req)
    {
    	$id = Auth::id();
    	$idicon = $req['idicon'];
    	$code = $req['code'];
    	$title = $req['title'];
    	$descr = $req['descr'];
    	$data = array('code' => $code, 'title' => $title, 'descr' => $descr, 'id' => $id);
    	$rest = SettingModel::EditIcon($data, $idicon);
    	echo $rest;
    }
    function deleteIcon(Request $req)
    {
    	$id = Auth::id();
    	$idicon = $req['idicon'];
    	$rest = SettingModel::DeleteIcon($idicon);
    	echo $rest;
    }
}

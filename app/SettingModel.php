<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SettingModel extends Model
{
	function scopeGetTitle($query)
    {
    	return DB::table('site_setting')
    	->select('title','subtitle')
    	->limit(1)
    	->get();
    }

    function scopeSaveTitle($query, $data)
    {
    	return DB::table('site_setting')
    	->update($data);
    }

    function scopeGetInfo($query)
    {
    	return DB::table('site_about')
    	->select('idsiteabout','title','descr','id')
    	->get();
    }
    function scopeGetInfoId($query, $id)
    {
    	return DB::table('site_about')
    	->select('idsiteabout','title','descr','id')
    	->where('idsiteabout',$id)
    	->get();
    }
    function scopeSaveInfo($query, $data)
    {
    	return DB::table('site_about')
    	->insert($data);
    }
    function scopeEditInfo($query, $data, $idsiteabout)
    {
    	return DB::table('site_about')
    	->where('idsiteabout', $idsiteabout)
    	->update($data);
    }
    function scopeDeleteInfo($query, $idsiteabout)
    {
    	return DB::table('site_about')
    	->where('idsiteabout', $idsiteabout)
    	->delete();
    }


    function scopeGetIcon($query)
    {
    	return DB::table('icon')
    	->select('idicon','code','title','descr','id')
    	->get();
    }
    function scopeGetIconId($query, $id)
    {
    	return DB::table('icon')
    	->select('idicon','code','title','descr','id')
    	->where('idicon',$id)
    	->get();
    }
    function scopeSaveIcon($query, $data)
    {
    	return DB::table('icon')
    	->insert($data);
    }
    function scopeEditIcon($query, $data, $idicon)
    {
    	return DB::table('icon')
    	->where('idicon', $idicon)
    	->update($data);
    }
    function scopeDeleteIcon($query, $idicon)
    {
    	return DB::table('icon')
    	->where('idicon', $idicon)
    	->delete();
    }

    function scopeGetLogo($query, $type)
    {
        return DB::table('site_image')
        ->select(
            'image',
            'type',
            'id'
        )
        ->where('type',$type)
        ->get();
    }
    function scopeSaveLogo($query, $data)
    {
        return DB::table('site_image')
        ->insert($data);
    }
    function scopeUpdateLogo($query, $data, $type)
    {
        return DB::table('site_image')
        ->where('type',$type)
        ->update($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TinTucRequest;
use App\Http\Model\TinTucModel;
use Input,File;
use DB;

use App\Http\Requests;

class TinTucController extends Controller
{
    public function getListNews()
	{
		$listNews = $this->getList();
		return view('index')
		->with('list_news', $listNews)
        ->with('page', 35);
	}
	
	public function showAddListNews()
	{
		$listCatalog = DB::table('catalog')->get()->toArray();
		return view('index')
		->with('list_catalog', $listCatalog)
        ->with('page', 36);
	}
	
	public function addPostListNews(TinTucRequest $request)
	{
		DB::table('news')->insert([
			'name' => $request->name,
			'metaTitle' => $request->seotitle,
			'metaKeywords' => $request->seokeywords,
			'metaDescription' => $request->seodescription,
			'description' => $request->content,
			'image' => $request->files,
			'status' => 0,
			'createdBy' => '',
			'createdDate' => $request->name
		]);
		
		return view('index')
        ->with('page', 35);
	}
	
}

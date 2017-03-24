<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\TinTucRequest;
use App\Model\TinTucModel as TinTucModel;
use Input,File;
use DB;

use App\Http\Requests;

class TinTucController extends BaseController
{
	public function __construct(TinTucModel $tintuc)
	{
		$this->tintuc = $tintuc;
	}

	public function getListNews()
	{
		$listNews = $this->tintuc->get_table();
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
		$this->tintuc->insert_table($request->name, $request->seotitle, $request->seokeywords, $request->seodescription, $request->description, '', $request->catalog, '0');
		$message = array(
			'msg' => 'Bạn đã thêm tin mới thành công!',
			'status' => 'success'
		);
		return redirect('tin-tuc')
			->with('message', $message);
	}

	public function deleteNews($id){
		$this->tintuc->delete_table($id);
		$message = array(
			'msg' => 'Bạn đã xóa tin thành công!',
			'status' => 'success'
		);
		return redirect('tin-tuc')
			->with('message', $message)->withInput();
	}

	public function showIsActive(){
		if(isset($_GET)){
			if($_GET['status'] == 1){
				$status = 0;
			}else{
				$status = 1;
			}
			$id = $_GET['id'];
		}
		$this->tintuc->isActiveStatus($id, $status);
		echo json_encode(array('status' => $_GET['status']));
	}
}

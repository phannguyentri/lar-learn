<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateAddRequest;
use App\Models\Cate;
use Session;
use DateTime;

class CategoryController extends Controller
{
	public function getCateAdd(){
		$cates = Cate::select('id', 'name', 'parent_id')->get()->toArray();

		return view('admin.module.category.add', ['dataCates' => $cates]);
	}

	public function postCateAdd(CateAddRequest $request){
		$cate = new Cate;
		$cate->name 			= $request->txtCateName;
		$cate->slug 			=	str_slug($request->txtCateName, "-");
		$cate->parent_id	= $request->sltCate;
		// $cate->created_at = new DateTime();
		$cate->save();
		$request->session()->flash('status', 'Task was successful!');
		return redirect()->route('getCateList');
	}

	public function getCateList(){
		if (Session::has('status')) {
			echo Session::get('status');
		}
	}

}

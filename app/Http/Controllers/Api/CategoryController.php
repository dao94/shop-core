<?php namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Http\Models as Models;
use DB;
// use Carbon\Carbon;

class CategoryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Hiển thị danh sách loại sản phẩm
	 * @author daotc94@gmail.com
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	/*Hiển thị danh sách loại sản phẩm*/
	public function getIndex(Request $request) {
		$Model  = new Models\Category();
		$Total  = $Model->get()->count();
		$Model  = $Model->orderBy('id','DESC')->where('parent_key','=','0');
		$datas  = $this->paging($Model, $request);
		$result = array();
		foreach ($datas as $k => $item) {
			$_data    = DB::table('category')->where('parent_key','=',$item['id'])->get();
			$result[] = array(
				'id'       => $item['id'],
				'name'     => $item['name'],
				'children' => $_data
				);
		}
		// foreach ($datas as $k => $item) {
		// 	$_data    = DB::table('category')->where('parent_key','=',$item['id'])->get();
		// 	foreach ($_data as $key => $value) {
		// 		$_da_ta            = DB::table('category')->where('parent_key','=',$value->id)->get();
		// 		$_child = array('children' => $_da_ta);
		// 		array_push($_data, $_child);
		// 	}
		// 	$result[] = array(
		// 		'id'       => $item['id'],
		// 		'name'     => $item['name'],	
		// 		'children' => $_data
		// 		);
		// }
		$_objReturn = array(
			"error" 	=> false,
			"data"		=> array(),
			"message"	=> "",
			"total"		=> $Total
		);
		$_objReturn['data'] = $result;
		return Response::json($_objReturn);
	}

	/*thêm mới loại sản phẩm*/
	public function postPost(Request $request){
		$arr        = ['error' => false,'message' => '','data' => ''];
		$col_data   = DB::table('Category')->lists('name');
		$name       = $request->input('name');
		$_cat       = $request->input('category');
		$parent_key = $request->input('parent_id');
		if(isset($name) && !empty($name)) {
			if(in_array($name,$col_data)) {
				$arr['message'] = 'exits_data';
			} else {
				$Category              = new Models\Category;
				$Category->name        = $name;
				$Category->create_time = date("Y-m-d H:i:s");
				$Category->parent_key  = $parent_key;
				$rs                    = $Category->save();
				$LastInsertId          = $Category->id;
				$data = ['id' => $LastInsertId,
							'name' => $name,
							'create_time' => date("Y-m-d H:i:s"),
							'parent_key' => $parent_key
							];
				if($rs == true) {
					$arr['data']    = $data;
					$arr['message'] = 'Done';
				} else {
					$arr['error']   = true;
					$arr['message'] = 'Not Done';
				}
			}
		} else {
			$arr['error']   = true;
			$arr['message'] = 'null';
		}
		return Response::json($arr);
	}
	/*chỉnh sửa loại sản phẩm*/
	public function postPush(Request $request) {
		$id         = $request->input('id');
		$name       = $request->input('name');
		$col_data = DB::table('category')->lists('name');
		if(isset($name) && !empty($name)) {
			$Category              = Models\Category::find($id);
			$Category->name        = $name;
			$Category->update_time = date("Y-m-d H:i:s");
			$rs   = $Category->save();
			$data = ['id' => $id,'name' => $name,'update_time' => date("Y-m-d H:i:s")];
			$arr  = ['error' => false,'message' => '','data' => ''];
			if($rs == true) {
				$arr['data']    = $data;
				$arr['message'] = 'Done';
			} else {
				$arr['error']   = true;
				$arr['message'] = 'not done ';
			}
		} else {
			$arr['message'] = 'null';
		}
		return json_encode($arr);
	}

	/*Xóa loại sản phẩm*/
	public function postDelete(Request $request) {
		$id   = $request->input('id');
		if(!isset($id) && empty($id)) {
			return false;
		}
		$_res_child = DB::table('product')->where('category_id','=',$id)->get();
		if(empty($_res_child)) {
			$Category = new Models\Category;
			$Category = Models\Category::find($id);
			$rs = $Category->delete();
			if($rs == true) {
				$arr = ['error' => true,'message' => 'Done'];
			} else {
				$arr = ['error' => false,'message' => 'not Done'];
			}
		} else {
			$arr = ['error'=>false,'message' => 'exits_data_children'];
		}
		
		return json_encode($arr);
	}

}

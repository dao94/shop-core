<?php namespace App\Http\Controllers;
use App\Quotation;
use App\Http\Models as Models;
use DB;
use View;

class PhotoController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($id)
	{		
		$Model            = new Models\News();
		$model_product    = new Models\Product();
		$mode_category    = new Models\category();
		$partner          = new Models\partner();
		$intro            = new Models\Introduction();
		$_Objphoto        = new Models\Images();
		$ObjAlbum         = new Models\Album();
		$_list_name_album = $ObjAlbum->getNameAlbum();
		$list_image       = $_Objphoto->getlist($id);
		$list_intro       = $intro->getlist();
		$list_partner     = $partner->list_par();
		$Product_status   = $model_product->listProBySttAsc(9);
		$category         = $mode_category->get_category(5);
		$data  = ['list_category' => $category,'list_product_status' => $Product_status,'list_partner'=>$list_partner,'list_intro'=>$list_intro,'list_image'=>$list_image,'list_name_album'=>$_list_name_album];
		return View::make('photo',$data);
	}

}

<?php namespace App\Http\Controllers;
use App\Quotation;
use App\Http\Models as Models;
use DB;
use View;

class DetailController extends Controller {

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
	public function index($category_id)
	{		
		$Model            = new Models\News();
		$model_product    = new Models\Product();
		$mode_category    = new Models\category();
		$partner          = new Models\partner();
		$intro            = new Models\Introduction();
		$ObjAlbum         = new Models\Album();
		$_list_name_album = $ObjAlbum->getNameAlbum();
		$list_intro       = $intro->getlist();
		$list_partner     = $partner->list_par();
		$news             = $Model->list_news_pagehome();
		$Product_status   = $model_product->listProBySttAsc(9);
		$category         = $mode_category->get_category(5);
		$product_detail   = DB::table('product')->where('id','=', $category_id)->first();
		$product_same     = $model_product->listProductByCategory($product_detail->category_id,$product_detail->id);
		$data             = ['news'=> $news,'list_category' => $category,'list_product_status' => $Product_status,'product_detail'=> $product_detail,'product_same'=>$product_same,'list_partner'=>$list_partner,'list_intro'=>$list_intro,'list_name_album'=>$_list_name_album];
		return View::make('detail',$data);
	}
	public function news($id) {
		$Model            = new Models\News();
		$model_product    = new Models\Product();
		$mode_category    = new Models\category();
		$partner          = new Models\partner();
		$intro            = new Models\Introduction();
		$ObjAlbum         = new Models\Album();
		$_list_name_album = $ObjAlbum->getNameAlbum();
		$list_intro       = $intro->getlist();
		$list_partner     = $partner->list_par();
		$news             = $Model->list_news_pagehome();
		$Product_status   = $model_product->listProBySttAsc(9);
		$category         = $mode_category->get_category(5);
		$news_detail      = DB::table('news')->where('id','=', $id)->first();
		$data             = ['news'=> $news,'list_category' => $category,'list_product_status' => $Product_status,'news_detail'=>$news_detail,'list_partner'=>$list_partner,'list_intro'=>$list_intro,'list_name_album'=>$_list_name_album];
		return View::make('detail_news',$data);	
	}

}

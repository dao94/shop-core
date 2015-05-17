<?php namespace App\Http\Controllers;
use App\Quotation;
use App\Http\Models as Models;
use DB;
use View;

class HomeController extends Controller {

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
	public function index()
	{	
		// return view('home');
		$Model          = new Models\News();
		$model_product  = new Models\Product();
		$mode_category  = new Models\category();
		$partner        = new Models\partner();
		$intro          = new Models\Introduction();
		$list_partner   = $partner->list_par(2);
		$Product_news   = $model_product ->listProByIdAsc(9);
		$Product_status = $model_product->listProBySttAsc(9);
		$one_news       = $Model->list_news_pagehome(1);
		$news           = $Model->list_news_pagehome(6,$one_news->id);
		$category       = $mode_category->get_category(5);
		$list_intro     = $intro->getlist();
		$data  = ['news'=> $news,'list_category' => $category,'one_news' => $one_news,'list_product_new'=>$Product_news,'list_product_status' => $Product_status,'list_partner'=>$list_partner,'list_intro'=>$list_intro];
		return View::make('index',$data);
	}

	public function list_category_by_id($category_id) {
		$name_category  = DB::table('category')->where('id','=', $category_id)->pluck('name');
		$model_product  = new Models\Product();
		$Model          = new Models\News();
		$mode_category  = new Models\category();
		$partner        = new Models\partner();
		$intro          = new Models\Introduction();
		$list_partner   = $partner->list_par(2);
		$news           = $Model->list_news_pagehome(6);
		$Product_news   = $model_product ->listProByIdAsc(9);
		$Product_status = $model_product->listProBySttAsc(9);
		$one_news       = $Model->list_news_pagehome(1);
		$category       = $mode_category->get_category(5);
		$list_pr        = $model_product->listProductByCategory($category_id);
		$list_intro     = $intro->getlist();
		$data           = ['news'=> $news,'list_category' => $category,'one_news' => $one_news,'list_product_new'=>$Product_news,'list_product_status' => $Product_status,'list_pr' => $list_pr,'name_category'=>$name_category,'list_partner'=>$list_partner,'list_intro'=>$list_intro];
		return View::make('productcat',$data);
	}
	

}

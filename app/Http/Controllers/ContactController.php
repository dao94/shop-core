<?php namespace App\Http\Controllers;
use App\Quotation;
use App\Http\Models as Models;
use DB;
use View;

class ContactController extends Controller {

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
        $Product_status = $model_product->listProBySttAsc(9);
        $category       = $mode_category->get_category(5);
        $data  = ['list_category' => $category,'list_product_status' => $Product_status];
        return View::make('contact',$data);
    }
    

}

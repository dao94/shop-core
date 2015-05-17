<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class News extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';
	
	var $timestamps = false;
	protected $hidden = array();

	
	// Start for relations
	public function Author(){
		return $this->hasOne('App\Http\Models\User', 'id', 'user_id')->select('id', 'name');
	}
	
	public function GroupNews(){
		return $this->hasOne('App\Http\Models\Group_news', 'id', 'group_news_id')->select('id', 'name');
	}
	// End for relations

	public function getAll(){
		$_ret = $this->with(array('GroupNews', 'Author'));
		$_ret = $_ret->select('id', 'name', 'images','count_views','description','content', 'create_time', 'update_time', 'status', 'group_news_id', 'user_id');
		return $_ret;
	}
	/*list news page home*/ 
	public function list_news_pagehome($limit=0,$id=0) {
		if($limit == 1) {
			$news = DB::table('news')->select('id','name','images','description')->where('status','=',1)->orderBy('id')->take($limit)->first();	
		} else {
			$news = DB::table('news')->select('id','name','images','description')->where('status','=',1)->whereNotIn('id',[$id])->orderBy('create_time')->take($limit)->get();		
		}
		return $news;
	}
	

}

<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Excel;
class TinTucModel extends Model
{
	protected $table;
	
    public function __construct()
    {
        $this->table = 'news';
    }
	
    public function getlist(){
		return DB::table($this->table)->get()->toArray();
    }
}

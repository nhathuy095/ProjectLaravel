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
	
    public function get_table(){
		return DB::table($this->table)->get()->toArray();
    }

    public function insert_table($name, $metaTitle, $metaKeywords, $metaDescription, $description, $image, $categoryID, $status){
        $array = array(
            'name' => $name,
            'metaTitle' => $metaTitle,
            'metaKeywords' => $metaKeywords,
            'metaDescription' => $metaDescription,
            'description' => $description,
            'image' => $image,
            'categoryID' => $categoryID, 
            'status' => $status,
            'createdBy' => '',
            'createdDate' => date('Y-m-d H:i:s')
        );
        DB::table($this->table)->insert([$array]);
    }

    public function update_table($id, $name, $metaTitle, $metaKeywords, $metaDescription, $description, $image, $status, $createdBy, $modifiedBy){
        $array = array(
            'name' => $name,
            'metaTitle' => $metaTitle,
            'metaKeywords' => $metaKeywords,
            'metaDescription' => $metaDescription,
            'description' => $description,
            'image' => $image,
            'status' => $status,
            'modifiedBy' => $modifiedBy,
            'modifiedDate' => date('Y-m-d H:i:s')
        );
        DB::table($this->table)->where('id', $id)->update($array);
    }

    public function delete_table($id){
        return DB::table($this->table)->where('id', $id)->delete();
    }
    
    public function isActiveStatus($id, $status){
        $array = array(
            'status' => $status,
        );
        DB::table($this->table)->where('id', $id)->update($array);
    }
}

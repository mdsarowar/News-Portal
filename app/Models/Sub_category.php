<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $subcategory;

    public static function saveData($request){

        self::$subcategory=new Sub_category();
        self::$subcategory->category_id=$request->category_id;
        self::$subcategory->sub_category_name=$request->sub_category_name;
        self::$subcategory->save();
    }

    public static function updateData($request,$id){
        self::$subcategory=Sub_category::find($id);
        self::$subcategory->category_id=$request->category_id;
        self::$subcategory->sub_category_name=$request->sub_category_name;
        self::$subcategory->save();

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}


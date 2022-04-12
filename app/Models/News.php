<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $news;
    protected static $imageUrl;
    protected static $directory;
    protected static $imageName;
    protected static $image;


    public static function saveData($request){
        self::$image=$request->file('image');

        if (self::$image){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            self::$imageUrl='';
        }


        self::$news=new News();
        self::$news->category_id          =$request->category_id;
        self::$news->sub_category_id          =$request->sub_category_id;
        self::$news->news_title          =$request->news_title;
        self::$news->image          =self::$imageUrl;
        self::$news->short_description          =$request->short_description;
        self::$news->content          =$request->content;
        self::$news->save();
    }

    public static function updateData($request,$id){
        $newstable=News::find($id);
        self::$image=$request->file('image');
        if (self::$image){
            if (file_exists($newstable->image)){
                unlink($newstable->image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/';
            self::$image->move(self::$directory,self::$imageUrl);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            if(isset($newstable->image)){
                self::$imageUrl=$newstable->image;
            }else{
                self::$imageUrl='';
            }

        }

        $newstable->category_id          =$request->category_id;
        $newstable->sub_category_id      =$request->sub_category_id;
        $newstable->news_title           =$request->news_title;
        $newstable->image                =self::$imageUrl;
        $newstable->short_description    =$request->short_description;
        $newstable->content              =$request->content;
        $newstable->save();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
   public function subCategory(){
        return $this->belongsTo(Sub_category::class);
   }
}

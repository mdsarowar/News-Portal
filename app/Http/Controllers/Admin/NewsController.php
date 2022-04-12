<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use function redirect;
use function view;

class NewsController extends Controller
{

    public function addNews(){
        return view('admin.news.add',[
            'categorys'=>Category::all(),
            'subcategorys'=>Sub_category::all(),
        ]);
    }

    public function newNews(Request $request){
        News::saveData($request);
        return redirect()->back()->with('message','Category Create successfully');
    }

    public function manageNews(){
        return view('admin.news.manage',[
            'newses'=>News::all(),
        ]);

    }

    public function NewsStatusChange($id){
        $news=News::findOrFail($id);
        $news->status=$news->status == 0 ? 1:0 ;
        $news->save();
        return redirect()->back()->with('message','Status Change Successfully');
    }

    public function editNews($id){
        return view('admin.news.edit',[
            'news'=>News::find($id),
            'categorys'=>Category::all(),
            'subcategorys'=>Sub_category::all(),
        ]);
    }

    public function updateNews(Request $request,$id){
        News::updateData($request,$id);
        return redirect('manage_news')->with('message','Category Update successfully');
    }

    public function deleteNews($id){
        $news=News::find($id);
        $news->delete();
        return redirect()->back()->with('message','Category Delete Successfully');

    }
}

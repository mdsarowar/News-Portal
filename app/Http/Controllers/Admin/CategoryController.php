<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function redirect;
use function view;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add');
    }
    public function newCategory(Request $request){
        Category::saveData($request);
        return redirect()->back()->with('message','Category Create successfully');
    }
    public function manageCategory(){
        return view('admin.category.manage',[
            'categoryes'=>Category::all(),
        ]);

    }

    public function categoryStatusChange($id){
        $category=Category::findOrFail($id);
        $category->status=$category->status == 0 ? 1:0 ;
        $category->save();
        return redirect()->back()->with('message','Status Change Successfully');
    }

    public function editCategory($id){
        return view('admin.category.edit',[
            'category'=>Category::find($id),
        ]);
    }

    public function updateCategory(Request $request,$id){
        Category::updateData($request,$id);
        return redirect('manage_category')->with('message','Category Update successfully');
    }

    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('message','Category Delete Successfully');

    }
}

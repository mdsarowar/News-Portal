<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use function redirect;
use function view;

class SubCategoryController extends Controller
{

    public function addSubCategory(){
        return view('admin.subcategory.add',[
            'categorys'=>Category::all(),
        ]);
    }
    public function newSubCategory(Request $request){
        Sub_category::saveData($request);
        return redirect()->back()->with('message','Category Create successfully');
    }
    public function manageSubCategory(){
        return view('admin.subcategory.manage',[
            'subcategoryes'=>Sub_category::all(),
        ]);

    }

    public function SubcategoryStatusChange($id){
        $subcategory=Sub_category::findOrFail($id);
        $subcategory->status=$subcategory->status == 0 ? 1:0 ;
        $subcategory->save();
        return redirect()->back()->with('message','Status Change Successfully');
    }

    public function editSubCategory($id){
        return view('admin.subcategory.edit',[
            'subcategory'=>Sub_category::find($id),
            'categorys'=>Category::all(),
        ]);
    }

    public function updateSubCategory(Request $request,$id){
        Sub_category::updateData($request,$id);
        return redirect('manage_sub_category')->with('message','Category Update successfully');
    }

    public function deleteSubCategory($id){
        $subcategory=Sub_category::find($id);
        $subcategory->delete();
        return redirect()->back()->with('message','Category Delete Successfully');

    }
}

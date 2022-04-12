<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class frontviewController extends Controller
{
    public function categoryPage(){
        return view('frontend.category.categoryview');
    }
    public function contactPage(){
        return view('frontend.contact.contact');
    }

    public function contactPost(Request $request,$id){

        Category::updateProduct($request,$id);
        Contact::saveData($request);
        return redirect()->back()->with('message','Your message send successfully');
    }
}

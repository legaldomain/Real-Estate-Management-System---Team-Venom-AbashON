<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function AllBlogCategory(){

        $category = BlogCategory::latest()->get();
        return view('backend.category.blog_category',compact('category'));


    } //endmethod



    public function StoreBlogCategory(Request $request){


        BlogCategory::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name))  ,


        ]);

        $notification = array(

            'message' => 'Blog Category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
        

    } //End method


    public function EditBlogCategory($id){

        $categories = BlogCategory::findOrFail($id);
        return response()->json($categories);

    } //End method



    public function UpdateBlogCategory(Request $request){

        $cat_id = $request->cat_id;

        BlogCategory::findOrFail($cat_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name))  ,


        ]);

        $notification = array(

            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
        

    } //End method


    public function DeleteBlogCategory($id){

        BlogCategory::findOrFail($id)->delete();
        $notification = array(

            'message' => 'Blog Category DELETED Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
        



    } //End method



    public function AllPost(){

        $post = BlogPost::latest()->get();
        return view('backend.post.all_post',compact('post'));

    } //End method

    
    public function AddPost(){

        $blogcat = BlogCategory::latest()->get();
        return view('backend.post.add_post',compact('blogcat'));
    } //End method
}

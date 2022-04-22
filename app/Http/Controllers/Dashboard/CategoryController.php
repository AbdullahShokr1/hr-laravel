<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Show all Categories
    public function index(){
        return view('dashboard.category.index',[
            'categories'=> Category::latest()->get(),
        ]);
        // 'tags' => Tag::query()->latest()->paginate(10)
    }
    //Create new Category
    public function create(){
        return view('dashboard.category.create');
    }
    //Store new Category in DB
    public function store(CategoryRequest $request){
        Category::create($request->validated());

        return redirect()->route('dashboard.category.index')->with(['success'=>'Category Added Successfully']) ;
    }
    //Edit Category
    public function edit(Category $category){
        return view('dashboard.category.update',compact('category'));
    }
    //update Category && Store in DB
    public function update(Category $category,CategoryRequest $request){
        $category->update($request->validated());

        return redirect()->route('dashboard.category.index')->with(['success'=>'Category Updated Successfully']) ;
    }
    //update Category && Store in DB
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('dashboard.category.index')->with(['success'=>'Category Deleted Successfully']) ;
    }
    public function show($slug)
    {

        $category = Category::select('id','title','slug')->where('slug',$slug)->first();
        return view('dashboard.category.Show',['posts'=> Post::get()],compact('category'));
    }
}

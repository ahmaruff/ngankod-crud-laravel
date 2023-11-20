<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        $data = [
            "categories" => $categories
        ];
        return view("category.index", $data);
    }

    public function create() {
        return view("category.create");
    }

    public function store(Request $request){
        $rules = [
            "name" => ["string", "required"]
        ];

        $validatedReq = $request->validate($rules);

        $category = Category::create($validatedReq);

        return redirect("/category");
    }

    public function edit($id) {
        $category = Category::find($id);
        $data = [
            "category" => $category
        ];

        return view("category.edit", $data);
    }

    public function update(Request $request, $id) {
        $rules = [
            "name" => ["string", "required"]
        ];

        $validatedReq = $request->validate($rules);

        // cara 1
        $category = Category::find($id);
        $category->name = $validatedReq["name"];
        $category->save();

        // cara 2
        // Category::where("id",$id)->update($validatedReq);

        return redirect("/category");
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect("/category");
    }
}

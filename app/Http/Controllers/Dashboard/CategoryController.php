<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use \Yajra\Datatables\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\DataTables\CategoriesDataTable;

class CategoryController extends Controller
{

// -------------------------------------------------------------------------------


    public function index(CategoriesDataTable $dataTable)
    {
    
        return $dataTable->render('dashboard.categories.index');

    }

// -------------------------------------------------------------------------------


    public function create()
    {
        return view('dashboard.categories.create');
    }

// -------------------------------------------------------------------------------


    public function store(Request $request)
    {
         $validate = $request->validate([
              
              "name" => 'required|min:3|string|unique:categories',
              "description" => 'sometimes|nullable|string',
            
         ]);

        Category::create($validate);

        session()->flash('success',trans('dashb.success_create'));

        return redirect(route('categories.index'));
    }

// -------------------------------------------------------------------------------


    public function show($id)
    {
        //
    }

// -------------------------------------------------------------------------------


    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return  view('dashboard.categories.edit',compact('category'));

    }

// -------------------------------------------------------------------------------


    public function update(Request $request, $id)
    {

       $category = Category::findOrFail($id);

       $validate = $request->validate([
              
              "name" => 'required|min:3|string|unique:categories,name,'.$category->id.'id',
              "description" => 'sometimes|nullable|string',
            
         ]);

        $category->update($validate);

        session()->flash('success',trans('dashb.success_update'));

        return redirect(route('categories.index'));
    }

// -------------------------------------------------------------------------------

    public function destroy($id)
    {
       $category = Category::findOrFail($id);

       $category->delete();

      session()->flash('success',trans('dashb.success_delete'));

        return redirect(route('categories.index'));


    }
}

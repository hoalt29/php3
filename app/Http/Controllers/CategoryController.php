<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    public function __construct()
    {
        $this->view = [];
    }

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string','max:255'],
            'status' => ['required','integer','min:1'],
        ],[
            'name.required'=>'Trường tên không được bỏ trống',
            'name.string'=>'Tên bắt buộc là chuỗi',
            'name.max'=>'Trường tên không được vượt quá 255 kí tự',

            'status.required'=>'Trạng thái không được bỏ trống',
            'status.string'=>'Trạng thái bắt buộc là số',
            'status.max'=>'Trạng thái không được ít hơn 1',

        ]);

        $categories = new Category();

        $categories->name = $request->name;
        $categories->save();

        return back()->with('msg','Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

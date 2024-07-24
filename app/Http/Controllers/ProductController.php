<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        //
        // Khởi tạo model
        $objPro = new Product();
        $this->view['listPro'] = $objPro->loadDataWithPager();
        // Truy vân + logic
        $objCate = new Category();
        $listCate = $objCate->loadAllCate();
        $arrayCate = [];
        foreach ($listCate as $value){
            $arrayCate[$value->id] = $value->name;
        }
        $this->view['listCate'] =  $arrayCate;
            ///
//        dd( $this->view['listCate']);
        return view('product.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$product = Product::all();

        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllCate();
        return view('product.create', $this->view);
        //return view('product.create', $product);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'name'=>['required','string','max:255'],
                'price'=>['required','integer','min:1'],
                'quantity'=>['required','integer','min:1'],
                'image' => ['required','image','mimes:jpg,jpeg,png'],
                'category_id'=>['required','exists:categories,id'],
            ],
            [
                'name.required'=>'Trường tên không được bỏ trống',
                'name.string'=>'Tên bắt buộc là chuỗi',
                'name.max'=>'Trường tên không được vượt quá 255 kí tự',

                'price.required'=>'Giá không được bỏ trống',
                'price.string'=>'Giá bắt buộc là số',
                'price.max'=>'Giá không được nhỏ hơn 1',

                'quantity.required'=>'Số lượng không được bỏ trống',
                'quantity.string'=>'Số lượng bắt buộc là số',
                'quantity.max'=>'Số lượng không được nhỏ hơn 1',

                'image.required'=>'Ảnh không được bỏ trống',

                'category_id.required'=>'Trường danh mục không được bỏ trống',

            ]
        );
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
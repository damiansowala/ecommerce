<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Modules\Products\Models\ProductParam;
use Illuminate\Http\Request;

class ProductParamController extends Controller
{
    public function index()
    {
        $productParams = ProductParam::all();
        return response()->json($productParams);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'length' => 'required|numeric',
        ]);

        $productParam = ProductParam::create($request->all());

        return response()->json($productParam, 201);
    }

    public function show($id)
    {
        $productParam = ProductParam::findOrFail($id);
        return response()->json($productParam);
    }

    public function update(Request $request, $id)
    {
        $productParam = ProductParam::findOrFail($id);

        $request->validate([
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'length' => 'required|numeric',
        ]);

        $productParam->update($request->all());

        return response()->json($productParam);
    }

    public function destroy($id)
    {
        $productParam = ProductParam::findOrFail($id);
        $productParam->delete();

        return response()->json(null, 204);
    }
}

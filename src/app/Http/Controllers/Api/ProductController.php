<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        //
        return response()->json([
            'success' => true,
            'data' => ProductResource::collection(Product::all())
        ], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new ProductResource($product)
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): JsonResponse
    {

        $product = Product::create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Producto creado correctamente.',
            'data' => new ProductResource($product)
        ], 201);
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product): JsonResponse
    {
        //
        $product->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Producto actualizado correctamente.',
            'data' => new ProductResource($product),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): JsonResponse
    {
        //
        $product->delete();
        return response()->json([
            'success' => true,
            'message' => 'Producto eliminado correctamente.'
        ], 204);
    }
}

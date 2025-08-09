<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductStoreRequest;
use App\Http\Requests\AdminProductUpdateRequest;
use App\Models\Product;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    use FileUpload;
    public function index()
    {
        $data = [
            'title' => 'Products',
            'products' => Product::latest()->get()
        ];

        return view('dashboard.admin.product.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Product',
        ];

        return view('dashboard.admin.product.create', $data);
    }

    public function store(AdminProductStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $data['uuid'] = str()->uuid();
            $data['slug'] = str()->slug($data['name']);

            $storeProduct = Product::create($data);

            if (!$storeProduct) {
                return redirect()->back()->with('error', 'Failed to create product');
            }

            $storeProduct->update([
                'image' => $this->imageInterventionUploadFile($request, 'image', '/uploads/products/', 450, 450),
            ]);

            DB::commit();

            return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong'.$e->getMessage());
        }
    }

    public function show(string $uuid)
    {
        $data = [
            'title' => 'Product Detail',
            'product' => Product::where('uuid', $uuid)->firstOrFail()
        ];

        return view('dashboard.admin.product.show', $data);
    }
    public function edit(string $uuid)
    {
        $data = [
            'title' => 'Edit Product',
            'product' => Product::where('uuid', $uuid)->firstOrFail()
        ];

        return view('dashboard.admin.product.edit', $data);
    }

    public function update(AdminProductUpdateRequest $request, string $uuid)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $data['slug'] = str()->slug($data['name']);

            $product = Product::where('uuid', $uuid)->firstOrFail();

            $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/products/', 450, 450, $product->image);

            $product->update($data);

            DB::commit();

            return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }

    public function delete(string $uuid)
    {
        DB::beginTransaction();
        try {
            $product = Product::where('uuid', $uuid)->firstOrFail();

            $this->deleteFile($product->image);

            $product->delete();

            DB::commit();

            return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
}

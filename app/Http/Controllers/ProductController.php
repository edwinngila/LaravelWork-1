
<?php

use ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        // Validate and save the new product with an image upload
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        // Validate and update the product, including image update
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('products.index')->with('msg', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        // Delete the product and its associated image
        $product = Product::find($id);
        if ($product->image) {
            unlink(public_path('images/products/' . $product->image));
        }
        $product->delete();

        return redirect()->route('products.index')->with('msg', 'Product Deleted Successfully');
    }
}

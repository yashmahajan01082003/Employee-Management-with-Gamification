<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(['name', 'quantity', 'points', 'img']);
        $product = Product::create($inputs);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $inputs = $request->only(['name', 'quantity', 'points', 'img']);
        $product->fill($inputs);
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function redeem(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();
        $balance_points = $user->getBalancePoints();
        if ($product->quantity == 0) {
            session()->flash('error', 'Insufficient stock.');
            return redirect()->route('ugmart.products');
        }
        if ($product->points <= $balance_points) {
            Point::create([
                'pointable_id' => $product->id,
                'pointable_type' => get_class($product),
                'user_id' => $user->id,
                'transaction_type' => 'D',
                'points' => $product->points,
            ]);
            $product->quantity -= 1;
            $product->save();

            session()->flash('message', 'Product redeemed successfully.');
        } else {
            session()->flash('error', 'Insufficient balance.');
        }

        return redirect()->route('ugmart.products');
    }
}

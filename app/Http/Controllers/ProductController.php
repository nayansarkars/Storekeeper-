<?php

// app/Http/Controllers/ProductController.php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;

// class ProductController extends Controller
// {
//     public function showForm()
//     {
//         return view('product.form');
//     }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'name' => 'required|string',
//             'quantity' => 'required|integer',
//             'price' => 'required|numeric',
//         ]);

//         Product::create($data);

//         return redirect()->route('product.form')->with('success', 'Product added successfully');
//     }

//     public function updatePrice(Request $request)
//     {
//         // Logic to update product price in consultation with syndicate consultant
//     }

//     public function showDashboard()
//     {
//         // Logic to calculate and display sales figures
//         return view('dashboard');
//     }

//     public function showTransactionHistory()
//     {
//         $transactions = Product::orderBy('created_at', 'desc')->get();
//         return view('transaction.history', compact('transactions'));
//     }
// }


// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // ...

    public function showForm()
    {
        return view('product.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::create($data);

        return redirect()->route('product.form')->with('success', 'Product added successfully');
    }

    public function updatePrice(Request $request)
    {
        // Logic to update product price in consultation with syndicate consultant
    }

    public function showDashboard()
    {
        // Logic to calculate and display sales figures
        return view('dashboard', [
            'todaySales' => 1000, // Replace with actual sales data
            'yesterdaySales' => 1500,
            'thisMonthSales' => 5000,
            'lastMonthSales' => 7000,
        ]);
    }

    public function showTransactionHistory()
    {
        $transactions = Product::orderBy('created_at', 'desc')->get();
        return view('transaction.history', compact('transactions'));
    }
}

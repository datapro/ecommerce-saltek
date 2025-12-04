<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use DB;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
         $cart = session()->get('cart', []);

    if (empty($cart)) {
        return redirect()->route('shop')
            ->with('error', 'Your cart is empty.');
    }

    return view('carting.checkout', compact('cart'));
    }
    



   public function placeOrder(Request $request)
{
    $cart = session()->get('cart', []);

    if (empty($cart)) {
        return back()->with('error', 'Your cart is empty.');
    }

    // Validate input
    $data = $request->validate([
        'customer_name'    => 'required|string|max:255',
        'customer_email'   => 'nullable|email|max:255',
        'customer_phone'   => 'nullable|string|max:50',
        'customer_address' => 'nullable|string',
        'customer_say'     => 'nullable|string',
        'total'            => 'required|numeric|min:0',
        'status'           => 'nullable|in:pending,paid,cancelled,shipped',
    ]);

    // Save order
    $order = DB::transaction(function () use ($data, $cart) {

        $order = Order::create([
            'customer_name'    => $data['customer_name'],
            'customer_email'   => $data['customer_email'] ?? null,
            'customer_phone'   => $data['customer_phone'] ?? null,
            'customer_address' => $data['customer_address'] ?? null,
            'customer_say'     => $data['customer_say'] ?? null,
            'total'            => $data['total'],
            'status'           => $data['status'] ?? 'pending',
        ]);

        // OPTIONAL: save each product from cart
        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id'    => $order->id,
                'product_id'  => $productId,
                'name'       => $item['name'],
                'price'       => $item['price'],
                'quantity'    => $item['quantity'],
                'subtotal'    => $item['price'] * $item['quantity'],
            ]);
        }

        return $order;
    });

    // Clear cart
    session()->forget('cart');

    return redirect('/')->with('success', 'Order placed successfully!');
}

}

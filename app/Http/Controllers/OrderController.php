<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function orderList(Request $request)
    {
     // Get all order items
    $items = OrderItem::with('order')
                ->orderBy('id', 'DESC')
                ->paginate(20);

    // Show the page
    return view('admin.order', compact('items'));

    }

    public function deleteOrder($id)
{
    $item = Order::findOrFail($id);

    // Delete related order items first
    $item->items()->delete();

    // Delete the order
    $item->delete();

    return back()->with('success', 'Order deleted successfully.');
}

    public function customer()
    {
        //
        $customers = User::paginate(10);
        return view('admin.customer', compact('customers'));
    }

    public function destroy(string $id){
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'User Deleted Successfully!');
    }
}

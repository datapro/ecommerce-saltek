<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class OrderController extends Controller
{
    //
    public function orderList()
    {
     return view('admin.order');   
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

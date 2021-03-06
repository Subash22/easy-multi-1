<?php

namespace App\Http\Controllers;
use App\Retailer;
use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
	function createCustomerForm(){		
		$retailers=Retailer::all();
		return view('admin.createcustomer',['retailers'=>$retailers]);
	}


	function createCustomer(Request $request){

		$validated=$request->validate([
			'name' => 'required|String',
			'address' => 'required|String',
			'retailer_id' => 'required|integer|exists:retailers,id',
			'phone' => 'required|String',
		]);

		Customer::create($validated);
		return back()->with('success','Product created successfully!');

		
	}


}

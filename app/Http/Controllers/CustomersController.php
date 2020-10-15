<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {

    	$customers = Customer::all();
    	return view('customers.index', compact('customers'));
    }

    public function show(Customer $customer)

    {
    	return view('customers.show', compact('customers'));
    }

    public function create()
    {
    	return view('customers.create');
    }
    public function store()
    {
    	$validated_fields = request()->validate([
    		'last_name' => 'required',
    		'first_name' => 'required',
    		'middle_name' => 'requred',


    	]);

    	$customer = Customer::create($validated_fields);

    	return redirect('/customers');
    }
}

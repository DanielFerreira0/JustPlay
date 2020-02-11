<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        $array_customers = array('customers' =>$customer);
        return view('backoffice/customers', $array_customers);
    }


    public function add(Request $request)
    {
        //dd($request->all());

        $password = $request->password_form;
        $confirm = $request->confirm_password_form;

        if ($password == $confirm) {
            $customer = new Customer;
            $customer->name = $request->name_form;
            $customer->lastname = $request->lastname_form;
            $customer->email = $request->email_form;
            $customer->password = $request->password_form;
            $customer->phone = $request->phone_form;

            $customer->save();
            return back();
        } else {
            return view('backoffice/home');
        }
    }



}

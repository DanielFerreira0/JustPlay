<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;

class FieldController extends Controller
{
    public function index(){
        $field = Field::all();
        $array_field = array('fields' =>$field);

        return view('backoffice/fields', $array_field);
    }

    public function add(Request $request){
        $field = new Field;
        $field->name = $request->name_form;
        $field->locality = $request->locality_form;
        $field->price = $request->price_form;
        $field->open = $request->open_form;
        $field->close = $request->close_form;
        $field->phone = $request->phone_form;
        $field->email = $request->email_form;

        $field->save();

        return back();
    }

    public function details($id)
    {
        $field = Field::find($id);

        return view('backoffice/details', $field);
    }

    public function delete($id){
        $field = Field::find($id);
        $field->delete();

        return redirect('backoffice/fields');
    }


}

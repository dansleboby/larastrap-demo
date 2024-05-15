<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller {
	public function index() {
		return view('welcome');
	}

    public function post(Request $request) {
        $fields = [
            'check',
            'color',
            'date',
            'datetime',
            'email',
            'file',
            'month',
            'number',
            'password',
            'radios',
            'range',
            'select',
            'select_multiple',
            'search',
            'tel',
            'text',
            'textarea',
            'time',
            'url',
            'week'
        ];
        $rules = [
            "root.child1.child2.child3.child4.text" => 'required'
        ];
        foreach ($fields as $field) {
            $rules[$field] = 'required';
            $rules["root.child.".$field] = 'required';
            $rules["root_html.child.".$field] = 'required';
        }
        $request->validate($rules);

        return $request->all();
    }
}

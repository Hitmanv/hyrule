<?php
/**
 * Author: hitman
 * Date: 29/8/2016
 * Time: 11:58 PM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function getForm()
    {
        return view('admin.template.form');
    }

    public function postForm(Request $request)
    {
        return response()->json($request->all());
    }

    public function getRoute()
    {
        return view('admin.template.route');
    }
}

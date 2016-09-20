<?php
/**
 * Author: hitman
 * Date: 29/8/2016
 * Time: 11:58 PM
 */

namespace App\Http\Controllers\Web\Admin;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
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

    public function getUpload()
    {
        return view('admin.template.upload');
    }

    public function postUpload(Request $request)
    {
        $value = $this->qiniuUpload($request, 'file');

        return response()->json(['path'=>$value]);
    }

    public function getSpinner()
    {
        return view('admin.template.spinner');
    }

    public function getElements()
    {
        return view('admin.template.elements');
    }
}

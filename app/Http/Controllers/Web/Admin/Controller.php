<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function qiniuUpload(Request $request, $key)
    {
        $file     = $request->file($key);
        $path     = public_path() . '/upload/';
        $filename = date('Y_m_d_H_i_s_') . str_random(6) . '.' . $file->getClientOriginalExtension();
        $request->file($key)->move($path, $filename);

        $filePath = $path . "/" . $filename;

        $accessKey = config('services.qiniu.access_key');
        $secretKey = config('services.qiniu.secret_key');
        $auth = new Auth($accessKey, $secretKey);
        $token = $auth->uploadToken('hitman');
        $manager = new UploadManager();
        list($ret, $err) = $manager->putFile($token, $filename, $filePath);

        return env('STATIC_URL') . $filename;
    }
}

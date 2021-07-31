<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    /**
     * 处理文件上传
     * @return filePath
     */
    public function upload()
    {
        $file = Input::file('myFileName');
        if ($file->isValid()) {
            // $realPath = $file->getRealPath();//临时文件的绝对路径
            $extension = $file->getClientOriginalExtension();//上传文件的后缀
            $newName = date('YmdHis') . mt_rand(100, 999) . '.' . $extension;
            $path = $file->move('images/uploads', $newName);
            $filePath = '/images/uploads/' . $newName;
            return $filePath;
        }
    }
}

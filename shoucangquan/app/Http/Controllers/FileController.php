<?php

namespace App\Http\Controllers;

use App\Models\FileModel;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    //get.information   全部文章列表
    public function index()
    {
        $data = Input::except('_token');
        if (empty($data)) {
            $data = FileModel::orderBy('file_id', 'desc')->paginate(15);
        } else {
            $data = FileModel::where('file_name', 'like', '%' . $data['file_name'] . '%')->orderBy('file_id', 'desc')->paginate(15);
        }
        return view('information/index', compact('data'));
    }
    public function searchFile(){
        $data = FileModel::orderBy('file_id', 'desc')->paginate(15);
        return view('home/index', compact('data'));
    }

    public function searchFileById($file_id){
        $field = FileModel::find($file_id);
        //查看次数自增
        FileModel::where('file_id',$file_id)->increment('file_view');
        $article['pre'] = FileModel::where('file_id','<',$file_id)->orderBy('file_id','desc')->first();
        $article['next'] = FileModel::where('file_id','>',$file_id)->orderBy('file_id','desc')->first();
        return view('home/info-detail',compact('field','article'));
    }

    //get.information/create   添加文章
    public function create()
    {
        return view('information/add');
    }

    //post.information //添加文章提交
    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'file_name' => 'required',
            'file_title' => 'required',
            'file_area' => 'required',
        ];
        $message = [
            'file_name.required' => '文章名称不能为空',
            'file_title.required' => '文章标题不能为空',
            'file_area.required' => '文章内容不能为空',
        ];
        $validator = Validator::make($input, $rules, $message);
        if ($validator->passes()) {
            if(empty($input['file_editor'])){
                $input['file_editor']='佚名';
            }
            $input = array_add($input, 'created_at', date('Y-m-d H:i:s'));
            $input = array_add($input, 'updated_at', date('Y-m-d H:i:s'));
            $re = FileModel::create($input);
            if ($re) {
                return redirect('information');
            } else {
                return back()->with('errors', '数据填充失败，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //information/{information}/edit  编辑文章
    public function edit($file_id)
    {
        $field = FileModel::find($file_id);
        return view('information/edit', compact('field'));
    }

    //put.information/{information} //更新文章
    public function update($file_id)
    {
        $input = Input::except('_token', '_method');
        $rules = [
            'file_name' => 'required',
            'file_title' => 'required',
            'file_area' => 'required',
        ];
        $message = [
            'file_name.required' => '文章名称不能为空',
            'file_title.required' => '文章标题不能为空',
            'file_area.required' => '文章内容不能为空',
        ];
        $validator = Validator::make($input, $rules, $message);
        if ($validator->passes()) {
            $input = array_add($input, 'updated_at', date('Y-m-d H:i:s'));
            $re = FileModel::where('file_id', $file_id)->update($input);
            if ($re) {
                return redirect('information');
            } else {
                return back()->with('errors', '数据更新失败，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //delete.information/{information}  删除文章
    public function destroy($file_id)
    {
        $str = explode(",", $file_id);
        $data = array();
        foreach ($str as $v) {
            $re = FileModel::where('file_id', $v)->delete();
            if (!$re) {
                $data = [
                    'status' => 1,
                    'file_id' => $v,
                ];
                break;
            }
        }
        if (empty($data)) {
            $data = [
                'status' => 0,
            ];
        }
        return $data;
    }

//get.information/{information} //显示文章
    public function show()
    {
        return view('home/info-detail');
    }


}

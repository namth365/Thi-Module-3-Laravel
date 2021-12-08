<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Manage;
use App\Models\Employee;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manages = Manage::paginate(10);
        return view ('admin.manages.index', compact('manages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:manages|max:150',
                'code' => 'required',
            ],
            [
                'name.unique' => 'Tên nhóm đã có ',
                'name.required' => 'Phải có tên nhóm',
                'code.required' => 'Phải có mã nhóm',
            ]
        );
        $manage = new Manage();
        $manage->code = $request->input('code');
        $manage->name = $request->input('name');
        $manage->save();

        return redirect()->route('manages.index')->with('status','Tạo mới nhóm thành công');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manage = Manage::findOrFail($id);
        return view('admin.manages.edit',compact('manage'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|unique:manages,name,'.$id.'|max:150',
                'code' => 'required',
            ],
            [
                'name.unique' => 'Tên nhóm đã có ',
                'name.required' => 'Phải có tên nhóm',
                'code.required' => 'Phải có mã nhóm',
            ]
        );
        $manage = Manage::find($id);
        $manage->code = $request->input('code');
        $manage->name = $request->input('name');
        $manage->save();

        return redirect()->route('manages.index')->with('status','Cập nhật nhóm thành công');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manage = Manage::findOrFail($id);
        $manage->delete();

        return redirect()->route('manages.index')->with('status','Xóa nhóm nhân viên thành công');
  
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Manage;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::paginate(10);
        $search = $request->search;
        $employees = Employee::select('*');

        if ($search ){
            $employees = $employees->where('name','like','%'.$search.'%'); 
        }
        $employees = $employees->paginate(10);

        return view ('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manage = Manage::orderBy('id', 'desc')->get();
        return view('admin.employees.create',compact('manage'));
  
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
                'name' => 'required|unique:employees|max:150',
                'birthday' => 'required',
                'code' => 'required',
                'sex' => 'required',
                'phone' => 'required',
                'cmnd' => 'required',
                'email' => 'required',
                'address' => 'required',
            ],
            [
                'name.unique' => 'Tên nhân viên đã có',
                'name.required' => 'Phải có tên nhân viên',
                'birthday.required' => 'Phải có ngày sinh',
                'code.required' => 'Phải có mã nhân viên',
                'sex.required' => 'Phải có giới tính',
                'phone.required' => 'Phải có điện thoại',
                'cmnd.required' => 'Phải có CMND',
                'email.required' => 'Phải có email',
                'address.required' => 'Phải có địa chỉ',
            ]
        );
        $employee = new Employee();
        $employee->code = $request->input('code');
        $employee->name = $request->input('name');
        $employee->birthday = $request->input('birthday');
        $employee->sex = $request->input('sex');
        $employee->phone = $request->input('phone');
        $employee->cmnd = $request->input('cmnd');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->manage_id = $request->input('manage_id');

        $employee->save();
        return redirect()->route('employees.index')->with('status','Tạo mới nhân viên thành công');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        $manage = Manage::orderBy('id', 'DESC')->get();
        return view('admin.employees.view',compact('employee','manage'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $manage = Manage::orderBy('id', 'DESC')->get();
        return view('admin.employees.edit',compact('employee','manage'));

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
                'name' => 'required|unique:employees,name,'.$id.'|max:255',
                'code' => 'required',
                'birthday' => 'required',
                'sex' => 'required',
                'phone' => 'required',
                'cmnd' => 'required',
                'email' => 'required',
                'address' => 'required',
            ],
            [
                'name.unique' => 'Tên nhân viên đã có',
                'name.required' => 'Phải có tên nhân viên',
                'code.required' => 'Phải có mã nhân viên',
                'birthday.required' => 'Phải có ngày sinh',
                'sex.required' => 'Phải có giới tính',
                'phone.required' => 'Phải có điện thoại',
                'cmnd.required' => 'Phải có CMND',
                'email.required' => 'Phải có email',
                'address.required' => 'Phải có địa chỉ',
            ]
        );
        $employee = Employee::find($id);
        $employee->code = $request->input('code');
        $employee->name = $request->input('name');
        $employee->birthday = $request->input('birthday');
        $employee->sex = $request->input('sex');
        $employee->phone = $request->input('phone');
        $employee->cmnd = $request->input('cmnd');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->manage_id = $request->input('manage_id');

        $employee->save();
        return redirect()->route('employees.index')->with('status','Cập nhật nhân viên thành công');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('status','Xóa nhân viên thành công');
 
    }
}

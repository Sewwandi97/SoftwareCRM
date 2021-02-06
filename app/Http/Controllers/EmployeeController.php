<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function indexwelcome(){
        return view('welcome');
    }

    public function indexlogin(){
        return view('login');
    }

    public function indexadduser(){
        return view('adduser');
    }

    public function indexviewuser(){
        return view('viewuser');
    }

    public function store(Request $request) {
       

        $employee=new Employee;

        $this->validate($request,[
            'Name'=>'required|max:100|min:5',
            'EmpID' =>'required',
            'Username' =>'required|max:100|min:5',
            'Password'=>'required|max:15|min:8',
            'Email' =>'required|max:100|min:5',
            'Mobile_Number' =>'required',
            'Address' =>'required|max:100|min:5',
            'Added_by' =>'required|max:100|min:5',
            'Role_ID' =>'required',

        ]);

        $employee->Name=$request->Name;
        $employee->EmpID=$request->EmpID;
        $employee->User_Name=$request->Username;
        $employee->Password=$request->Password;
        $employee->Email=$request->Email;
        $employee->MobileNo=$request->Mobile_Number;
        $employee->Address=$request->Address;
        $employee->Added_By=$request->Added_by;
        $employee->RoleID=$request->Role_ID;
        $employee->EmpType=$request->Position;
        $employee->Status=$request->status;
        $employee->save(); 
        $data=Employee::all();
        return view('viewuser')->with('employees',$data);
        
    }

    public function deleteuser($EmpID){
        $employee=Employee::find($EmpID); 
        $employee->delete();
        return redirect()->back();

    }
}

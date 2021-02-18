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
        //return view('viewuser');
        $employee->save(); 
        $data=Employee::all();
        return view('viewuser')->with('employees',$data);
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
       // return view('save')->with('employees',$data);
        return redirect()->back();

    }

    public function updateuser($EmpID){
        $employee=Employee::find($EmpID); 

        return view('updateuser')->with('employeedata',$employee);
    }

    public function update_user(Request $request){
        $EmpID=$request->EmpID;
        $Name=$request->Name;
        $User_Name=$request->Username;
        $MobileNo=$request->Mobile_Number;
        $Email=$request->Email;
        $Address=$request->Address;
        $EmpType=$request->Position;
        $Status=$request->status;
        $Password=$request->Password;


        $data=Employee::find($EmpID);
        $data->Address=$Address;
        $data->Email=$Email;
        $data->Status=$Status;
        $data->EmpType=$EmpType;
        $data->Name=$Name;
        $data->User_Name=$User_Name;
        $data->MobileNo=$MobileNo;
        $data->Password=$Password;


        
        $data->save();

        $data=Employee::all();
        return view('viewuser')->with('employees',$data);

    }
}

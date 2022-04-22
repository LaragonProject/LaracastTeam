<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stu;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('admin.addstudentform');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addstudentform');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([

            'enrollmentnumber' => 'required | numeric ',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:15',
            'division' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'semester' => 'required',
            'rollnumber' => 'required | numeric ',
            
        ]);

         
        $user =new User;
        $stud = new Stu;
        $user->name =$request->fullname;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->user_type = 'Student';
        
        $user->save();


        $id = $user->id;
        //dd($id);
        $stud->user_id=$id;
        $stud->enrollmentnumber =$request->enrollmentnumber;
        $stud->semester =$request->semester;
        $stud->rollnumber =$request->rollnumber;
        $stud->division =$request->division;
        $stud->department =$request->department;
        
        $stud->save();
      
        return redirect()->back()->with('success','created successfully');


        if($query){

            return back()->with('success','Data have been successfuly inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student = DB::table('users')
    ->select('users.name','users.email','student.id','student.enrollmentnumber','student.semester','student.rollnumber','student.division','student.department')
    ->join('student', 'student.user_id', '=', 'users.id')

    ->get();


    return view('admin.showstudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // return view('admin.editstudent');
       // dd("hekk");
        $student = DB::table('users')
        ->select('users.name','users.email','student.user_id','users.password','student.id','student.enrollmentnumber','student.semester','student.rollnumber','student.division','student.department')
        ->join('student', 'student.user_id', '=', 'users.id')->where('student.id',$id)->get();
      //dd($student);
        return view('admin.editstudent',compact('student'));
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

        $validated = $request->validate([

            'enrollmentnumber' => 'required | numeric ',
            'email' => 'required|email|unique:users',
            //'password' => 'required|min:4|max:15',
            'division' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'semester' => 'required',
            'rollnumber' => 'required | numeric ',
            
        ]);
        
        User::where('id',$request->user_id)->update(['name'=>$request->fullname,'email'=>$request->email,'password'=>$request->password]);
        Stu::where('id',$id)->update(['enrollmentnumber'=>$request->enrollmentnumber,'semester'=>$request->semester,'rollnumber'=>$request->rollnumber,'division'=>$request->division,'department'=>$request->department]);
        

         return redirect()->route('showmee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Stu::select('user_id')->where('id',$id)->get();
        
    //    define($user_idd = '$user_id');
       $stu = Stu::find($id);
       $user =User::whereIn('id',$user_id)->first();
       $stu->delete();
       $user->delete();
     
       return redirect()->route('showmee');
    }
    
}
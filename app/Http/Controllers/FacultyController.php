<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fac;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class FacultyController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('admin.addfacultyform');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addfacultyform');
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

            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:15',
            'experience' => 'required|numeric|min:2',
            'dob' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'qualifications' => 'required',
            'specialization' => 'required',
        ]);

        $user =new User;
        $fclty = new Fac;
        $user->name =$request->fullname;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->user_type = 'Faculty';
        
        $user->save();

        $id = $user->id;
        //dd($id);
        $fclty->user_id=$id;
        $fclty->dob =$request->dob;
        $fclty->experience =$request->experience;
        $fclty->department =$request->department;
        $fclty->qualifications =$request->qualifications;
        $fclty->specialization =$request->specialization;
        
        $fclty->save();
      
        return redirect()->back()->with('success','created successfully');

        // $query = DB::table('faculty')->insert([
        //     'email'=>$_request->input('email'),
        //     'password'=>$_request->input('password'),
        //     'experience'=>$_request->input('experience'),
        //     'dob'=>$_request->input('dob'),
        //     'fullname'=>$_request->input('fullname'),
        //     'department'=>$_request->input('department'),
        //     'qualifications'=>$_request->input('qualifications'),
        //     'specialization'=>$_request->input('specialization'),
        // ]);


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

        $faculty = DB::table('users')
    ->select('users.name','users.email','faculty.id','faculty.dob','faculty.experience','faculty.department','faculty.qualifications','faculty.specialization')
    ->join('faculty', 'faculty.user_id', '=', 'users.id')
   
    ->get();
    
       return view('admin.showfaculty',compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $faculty = DB::table('users')
        ->select('users.name','users.email','faculty.user_id','users.password','faculty.id','faculty.dob','faculty.experience','faculty.department','faculty.qualifications','faculty.specialization')
        ->join('faculty', 'faculty.user_id', '=', 'users.id')->where('faculty.id',$id)->get();
      
        return view('admin.editfaculty',compact('faculty'));
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

            'email' => 'required|email|unique:users',
            //'password' => 'required|min:8|max:15',
            'experience' => 'required|numeric|min:2',
            'dob' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'qualifications' => 'required',
            'specialization' => 'required',
        ]);


        User::where('id',$request->user_id)->update(['name'=>$request->fullname,'email'=>$request->email,'password'=>$request->password]);
        Fac::where('id',$id)->update(['dob'=>$request->dob,'experience'=>$request->experience,'department'=>$request->department,'qualifications'=>$request->qualifications,'specialization'=>$request->specialization]);
        

         return redirect()->route('showme');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $user_id = Fac::select('user_id')->where('id',$id)->get();
    //    define($user_idd = '$user_id');
       $fac = Fac::find($id);
       $user =User::whereIn('id',$user_id)->first();
       $fac->delete();
       $user->delete();
     
       return redirect()->route('showme');
    }
}
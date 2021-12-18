<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //database //view
        $students=student::all();
       // $grades=Grade::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view
        $grades=Grade::all();
        return view('student.create',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $rules =[
    //         'birthday' => 'required|before:-18 years',
    //         'image' => 'mimes:jpeg,bmp,png' 
    //     ];
    //     $custom_messages=[
    //         'before'=> 'Age must be above 18 years old',
    //     ];
    //   $request ->validate($rules,$custom_messages );
    $validatedData = $request->validate([
        'fname' => 'required',
        'lname' => 'required',
    ]);
     
        //databse //insert
       //  dd($request);
      //  $data=$request->all();
      $fna=$request->input('fname');
      $lna=$request->input('lname');
      $gen=$request->input('gender');
      $grade_id=$request->input('gradeID');
     // $sub=$request->input('subject_name');
      $add=$request->input('address');
      $bir=$request->input('birthday');
      $ema=$request->input('email');
      $pho=$request->input('phone');

      $student = new Student();
        $student->fname=$fna;
        $student->lname=$lna;
        $student->gender=$gen;
        $student->grade_id=$grade_id;
        $student->address=$add;
     //   $student->subject_name = implode(',',$request->subject);
        $student->birthday=$bir;
        $student->email=$ema;
        $student->phone=$pho;
        $student->save();


     

      // return $fna." ".$lna." ".$gen." ".$gra." ".$add." ".$bir." ".$ema." ".$pho;
      return redirect()->route('students.index')->with('message','saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //database
        //view
    
        $student=student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //database
        //view
        $grades=Grade::all();
        $student=student::find($id);
        return view('student.edit',compact('student','grades'));
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
        //database //update
    //     $rules =[
    //         'birthday' => 'required|before:-18 years',
    //         'fname' => 'required|unique:posts|max:255|fn',
    //     ];
    //     $custom_messages=[
    //         'before'=> 'Age must be above 18 years old',
    //         'fn'  => 'Fname Required',
    //     ];
    //   $request ->validate($rules,$custom_messages );
    $validatedData = $request->validate([
        'fname' => 'required',
        
    ]);
        $fna=$request->input('fname');
        $lna=$request->input('lname');
        $gen=$request->input('gender');
        $grade_id=$request->input('gradeID');
     //   $gra=$request->input('subject_name');
        $add=$request->input('address');
        $bir=$request->input('birthday');
        $ema=$request->input('email');
        $pho=$request->input('phone');
        $student =student::find($id);
          $student->fname=$fna;
          $student->lname=$lna;
          $student->gender=$gen;
     $student->grade_id=$grade_id;
          $student->address=$add;
     //     $student->subject_name = implode(',',$request->subject);
          $student->birthday=$bir;
          $student->email=$ema;
          $student->phone=$pho;
          $student->save();
       //   return $fna." ".$lna." ".$gen." ".$gra." ".$add." ".$bir." ".$ema." ".$pho;
          //  $request->session()->flash('message','saved successfully');
         // $message="saved suucessfully";
           // return redirect('/students');
           return redirect()->route('students.index')->with('message','saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //database //delete
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}

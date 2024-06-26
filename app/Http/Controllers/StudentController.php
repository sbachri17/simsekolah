<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Log;


class StudentController extends Controller
{
    //
    public function index(){
        $data['students']=Student::all(); //select all
        return view('student.index', $data);
    }
    
    public function create(){
       // return "Halo Peserta Diklat";
        return view('student.create');
    }

    public function store(Request $request){
        Log::debug($request);
        Log::info("ini proses insert data");
        //insert data pertama
        $student = new Student();
        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->birth_date = $request->birth_date;
        $student->save();
        // melakukan redirect ke daftar siswa dan menampilkan alert
        return redirect('student')->with('message', 'berhasil menambahkan data');
    }

    public function edit($id) {
    //     $data['student']=Student::findOrFail($id); //select * from student where id=$id
    //    return view('student.edit', $data);

       $student = Student::find($id);
        if($student==null){
            \Sentry::captureMessage('Student Dengan ID : '.$id.' Tidak Ditemukan');
            return 'Data Tidak Ditemukan';
        }else{

            $data['student'] =  $student;
            return view('student.edit',$data);
        }
    }

    public function update(Request $request, $id){
        //insert data pertama
        $student=Student::find($id);
        $student->update($request->all());
        // melakukan redirect ke daftar siswa dan menampilkan alert
        return redirect('student')->with('message', 'berhasil mengubah data');
    }

    public function destroy($id) {
        $student=Student::find($id);
        $student->delete();
         // melakukan redirect ke daftar siswa dan menampilkan alert
         return redirect('student')->with('message', 'berhasil menghapus data');
      
    }

}
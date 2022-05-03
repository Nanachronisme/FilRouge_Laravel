<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Section;
use App\Http\Requests\CreateTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.index', [
            'teachers' => Teacher::latest()->filter(request(['search']))->get() //search will be passed to queryScope in Teacher Model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('page.addTeacher')->with('sections', $sections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeacherRequest $request)
    {
        // Retrieve the validated input data...
        $request->validated();

        //the create method will automatically save the result
        $teacher = Teacher::create([
            'teaFirstName' => $request->input('firstName'),
            'teaName' => $request->input('lastName'),
            'teaNickName' => $request->input('nickName'),
            'teaGender' => $request->input('gender'),
            'teaOrigin' => $request->input('origin'),
            'section_id' => $request->input('section')
        ]);
        
        //dd($teacher);
        
        return redirect('/teachers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);

        //dd($teacher->section->secName);

        return view('page.detailTeacher', [$id])->with('teacher', $teacher);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'teacher' => Teacher::findOrFail($id),
            'sections' => Section::all()
        ];

        return view('page.editTeacher')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTeacherRequest $request, $id)
    {
        $request->validated();

        $teacher = Teacher::where('id', $id)->update([
            'teaFirstName' => $request->input('firstName'),
            'teaName' => $request->input('name'),
            'teaNickName' => $request->input('nickName'),
            'teaGender' => $request->input('gender'),
            'teaOrigin' => $request->input('origin'),
            'section_id' => $request->input('section')
        ]);

        return redirect('/teachers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher )
    {
        $teacher->delete();

        return redirect('/teachers');

    }
}

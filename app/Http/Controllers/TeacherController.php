<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Section;
use App\Http\Requests\CreateTeacherRequest;
use Hamcrest\Type\IsNumeric;
use Illuminate\Auth\Events\Failed;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(
        //      Teacher::latest()->filter(request(['search']))->get(),
        //      Teacher::paginate(5),
        //      Teacher::all()
        // );
        
        //'teachers' => Teacher::latest()->filter(request(['search']))->get() //search will be passed to queryScope in Teacher Model

        return view('page.index', ['teachers' => Teacher::latest()->filter(request(['search']))->paginate(20)]);
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
        //the slug will be automatically generated after creation of the asset
        $teacher = Teacher::create([
            'teaFirstName' => $request->input('firstName'),
            'teaName' => $request->input('name'),
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
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $teacher = Teacher::where("slug", $slug)->firstOrFail();

        //dd($teacher->section->secName);

        return view('page.detailTeacher', [$slug])->with('teacher', $teacher);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = [
            'teacher' => Teacher::where("slug", $slug)->firstOrFail(),
            'sections' => Section::all()
        ];

        return view('page.editTeacher')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTeacherRequest $request, $slug)
    {
        $request->validated();

        $teacher = Teacher::where('slug', $slug)->update([
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
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher )
    {
        $teacher->delete();

        return redirect('/teachers');

    }
}

<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Gate;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $curriculums = Curriculum::all();
        return view('klp09.curricula.index', compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all()->pluck('name', 'id');

        return view('klp09.curricula.create', compact('departments'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        if(!Gate::allows('courses_manage'))
        {
            return abort(403);
        }

        $request->validate(Curriculum::validation_rules);

        if(Curriculum::create($request->all())){
            notify('success', 'Berhasil menambahkan data Kurikulum');
        }else{
            notify('error', 'Gagal menambahkan data Kurikulum');
        }
        return redirect()->route('backend.curricula.index');
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
    public function edit(Curriculum $curriculum)
    {
        if(!Gate::allows('courses_manage'))
        {
            return abort(403);
        }

        $departments = Department::all()->pluck('name', 'id');

        return view('klp09.curricula.edit', compact('curriculum','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        if(!Gate::allows('courses_manage'))
        {
            return abort(403);
        }

        $request->validate(Curriculum::validation_rules);

        if($curriculum->update($request->all())){
            notify('success', 'Berhasil mengubah data Mata Kuliah');
        }else{
            notify('error', 'Gagal mengubah data Mata Kuliah');
        }
        return redirect()->route('backend.curricula.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        if(!Gate::allows('courses_manage'))
        {
            return abort(403);
        }

        if($curriculum->delete())
        {
            notify('success', 'Berhasil menghapus data Kurikulum');
            return redirect()->route('backend.curricula.index');
        }else{
            notify('error', 'Gagal menghapus data Kurikulum');
            return redirect()->back()->withErrors();
        }
    }
}

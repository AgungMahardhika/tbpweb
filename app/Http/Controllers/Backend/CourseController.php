public function edit(Course $course)
    {
        if(!Gate::allows('staffs_manage'))
        {
            return abort(403);
        }

        $curriculums = Curriculum::all()->pluck('name', 'id');

        return view('klp09.courses.edit', compact('course','curriculums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        if(!Gate::allows('staffs_manage'))
        {
            return abort(403);
        }

        $request->validate(Course::validation_rules);

        if($course->update($request->all())){
            notify('success', 'Berhasil mengubah data Mata Kuliah');
        }else{
            notify('error', 'Gagal mengubah data Mata Kuliah');
        }
        return redirect()->route('backend.courses.show', $course->id);
    }

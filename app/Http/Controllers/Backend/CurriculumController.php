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
        if(!Gate::allows('staffs_manage'))
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

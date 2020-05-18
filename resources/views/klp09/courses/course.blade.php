const validation_rules = [
        'name' => 'required',
        'curriculum_id' => 'required',
    ];
    protected $table = 'courses';

    protected $guarded = [];
    
    public function kurikulum()
    {
        return $this->belongsTo(Curriculum::class, 'curriculum_id','id');
    }

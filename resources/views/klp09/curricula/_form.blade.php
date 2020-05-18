
<div class="form-group">
    <label class="form-label" for="name">Nama Kurikulum</label>
    {{ html()->text('name')->class(["form-control", "is-invalid" => $errors->has('name')])->id('name')->placeholder('Nama Kurikulum') }}
    @error('name')
    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    @enderror
</div>

<!-- Text Field Input for Jurusan -->
<div class="form-group">
    <label class="form-label" for="department_id">Jurusan</label>
    {{ html()->select('department_id')->options($departments)->class(["form-control", "is-invalid" => $errors->has('department_id')])->id('department_id')->placeholder('Pilih Jurusan') }}
    @error('department_id')
    <div class="invalid-feedback">{{ $errors->first('department_id') }}</div>
    @enderror
</div>

<!-- Input (Select) Status -->
<div class="form-group">
    <label class="form-label" for="primary">Status</label>
    {{ html()->select('active')->options([1 => 'Dipakai', 2 => 'Tidak Dipakai'])->class(["form-control", "is-invalid" => $errors->has('active')])->id('active')->placeholder('') }}
    @error('active')
    <div class="invalid-feedback">{{ $errors->first('active') }}</div>
    @enderror
</div>

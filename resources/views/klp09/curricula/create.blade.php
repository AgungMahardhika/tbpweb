@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Kurikulum' => route('backend.courses.index'),
        'Tambah' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.curricula.index'), 'cil-list', 'List Kurikulum') !!}
@endsection

@section('content')

    {{ html()->form('POST', route('backend.curricula.store'))->open() }}

    <div class="card">
        <div class="card-header">
            <strong> <i class="cil-plus"></i> Tambah Kurikulum</strong>
        </div>

        <div class="card-body">

            @include('klp09.curricula._form')

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>

    {{ html()->form()->close() }}

@endsection

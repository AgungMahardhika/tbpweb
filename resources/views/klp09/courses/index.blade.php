@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Mata Kuliah' => route('backend.courses.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.courses.create'), 'cil-playlist-add', 'Tambah Mata Kuliah') !!}
    {!! cui()->toolbar_btn(route('backend.curricula.index'), 'cil-clipboard', 'kurikulum') !!}
@endsection

@section('content')

<div class="card">

        <div class="card-header">
            <strong>List Mata Kuliah</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Kode Matakuliah</th>
                    <th>Nama MataKuliah</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($courses as $course)
                    <tr>
                        <td>
                            {{ $course->code }}
                        </td>
                        <td>
                            {{ $course->name }}
                        </td>
                        <td>
                            {{ $course->semester }}
                        </td>
                        <td>
                            {{ $course->kurikulum->departement->name}}
                        </td>
                        <td>
                            {!! cui()->btn_view(route('backend.courses.show', [$course->id])) !!}
                            {!! cui()->btn_edit(route('backend.courses.edit', [$course->id])) !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada Mata Kuliah</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>
@endsection
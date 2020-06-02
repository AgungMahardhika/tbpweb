@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Kurikulum' => route('backend.curricula.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.curricula.create'), 'cil-playlist-add', 'Tambah Kurikulum') !!}
@endsection

@section('content')

<div class="card">

        <div class="card-header">
            <strong>List Kurikulum</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Nama Kurikulum</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($curriculums as $curriculum)
                    <tr>
                        <td>
                            {{ $curriculum->name }}
                        </td>
                        <td>
                            {{ $curriculum->departement->name }}
                        </td>
                        <td>
                            @if( $curriculum->active == '1')
                                <div class="badge badge-lg badge-primary">Dipakai</div>
                            @elseif($curriculum->active == '2')
                                <div class="badge badge-lg badge-danger">Tidak Dipakai</div>
                            @endif
                        </td>
                        <td>
                            {!! cui()->btn_edit(route('backend.curricula.edit', [$curriculum->id])) !!}
                            {!! cui()->btn_delete(route('backend.curricula.destroy', [$curriculum->id]), "Anda yakin akan menghapus data gedung ini?") !!}
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

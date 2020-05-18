@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Mata Kuliah' => route('backend.courses.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                   
                        {{ html()->modelForm($course, 'PUT', route('backend.courses.update', $course->id))->open() }}

                        {{--CARD HEADER --}}
                        <div class="card-header">
                            <strong><i class="cil-pencil"></i> Edit Matakuliah</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp09.courses._form')
                        </div>

                        {{-- CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan"/>
                        </div>

                        {{ html()->closeModelForm() }}
                       
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

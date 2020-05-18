@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Mata Kuliah' => route('backend.courses.index'),
        'Detail' => '#'
    ]) !!}
@endsection

@section('content')

<div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{ html()->modelForm($courses) }}

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-zoom"></i> Detail Informasi Mata Kuliah</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('klp09.courses._detail')
                </div>

                {{--CARD FOOTER--}}
                <div class="card-footer">
                </div>

                {{ html()->closeModelForm() }}

            </div>
        </div>

    </div>

@endsection
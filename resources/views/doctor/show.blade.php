@extends('layouts.app')

@section('template_title')
    {{ $doctor->name ?? "{{ __('Show') Doctor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Rooms:</strong>
                            {{ $doctor->id_rooms }}
                        </div>
                        <div class="form-group">
                            <strong>Identity Card:</strong>
                            {{ $doctor->identity_card }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $doctor->names }}
                        </div>
                        <div class="form-group">
                            <strong>Surnames:</strong>
                            {{ $doctor->surnames }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $doctor->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $doctor->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Form:</strong>
                            {{ $doctor->form }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $doctor->address }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $doctor->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Specialty:</strong>
                            {{ $doctor->specialty }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

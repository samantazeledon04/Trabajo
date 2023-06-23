@extends('layouts.app')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Record</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Hospitals:</strong>
                            {{ $record->id_hospitals }}
                        </div>
                        <div class="form-group">
                            <strong>Identity Card:</strong>
                            {{ $record->identity_card }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $record->names }}
                        </div>
                        <div class="form-group">
                            <strong>Surnames:</strong>
                            {{ $record->surnames }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $record->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $record->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Security Number:</strong>
                            {{ $record->security_number }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $record->address }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $record->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Specialty:</strong>
                            {{ $record->specialty }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $record->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Emergency Number:</strong>
                            {{ $record->emergency_number }}
                        </div>
                        <div class="form-group">
                            <strong>Entry Date:</strong>
                            {{ $record->entry_date }}
                        </div>
                        <div class="form-group">
                            <strong>Departure Date:</strong>
                            {{ $record->departure_date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bedrooms:</strong>
                            {{ $record->id_bedrooms }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

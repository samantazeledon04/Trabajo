@extends('layouts.app')

@section('template_title')
    {{ $visit->name ?? "{{ __('Show') Visit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Visit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('visits.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Records:</strong>
                            {{ $visit->id_records }}
                        </div>
                        <div class="form-group">
                            <strong>Id Doctors:</strong>
                            {{ $visit->id_doctors }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $visit->date }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostic:</strong>
                            {{ $visit->diagnostic }}
                        </div>
                        <div class="form-group">
                            <strong>Treatments:</strong>
                            {{ $visit->treatments }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

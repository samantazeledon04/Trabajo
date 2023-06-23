@extends('layouts.app')

@section('template_title')
    {{ $hospital->name ?? "{{ __('Show') Hospital" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Hospital</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $hospital->name }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $hospital->location }}
                        </div>
                        <div class="form-group">
                            <strong>Contact:</strong>
                            {{ $hospital->contact }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $hospital->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Manager:</strong>
                            {{ $hospital->manager }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

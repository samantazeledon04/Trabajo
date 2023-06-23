@extends('layouts.app')

@section('template_title')
    {{ $bed->name ?? "{{ __('Show') Bed" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bed</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('beds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Bedrooms:</strong>
                            {{ $bed->id_bedrooms }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $bed->number }}
                        </div>
                        <div class="form-group">
                            <strong>Particularity:</strong>
                            {{ $bed->particularity }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $bed->state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

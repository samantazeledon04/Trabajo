@extends('layouts.app')

@section('template_title')
    {{ $bedroom->name ?? "{{ __('Show') Bedroom" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bedroom</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bedrooms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Rooms:</strong>
                            {{ $bedroom->id_rooms }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $bedroom->number }}
                        </div>
                        <div class="form-group">
                            <strong>Ability:</strong>
                            {{ $bedroom->ability }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

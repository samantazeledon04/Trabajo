@extends('layouts.app')

@section('template_title')
    {{ $room->name ?? "{{ __('Show') Room" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Room</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Hospitals:</strong>
                            {{ $room->id_hospitals }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $room->name }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $room->location }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

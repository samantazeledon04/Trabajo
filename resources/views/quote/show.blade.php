@extends('layouts.app')

@section('template_title')
    {{ $quote->name ?? "{{ __('Show') Quote" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Quote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('quotes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Records:</strong>
                            {{ $quote->id_records }}
                        </div>
                        <div class="form-group">
                            <strong>Id Services:</strong>
                            {{ $quote->id_services }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $quote->date }}
                        </div>
                        <div class="form-group">
                            <strong>Reason:</strong>
                            {{ $quote->reason }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

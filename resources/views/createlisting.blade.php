@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing <span class="float-right"><a href="/dashboard" class="btn
            btn-outline-secondary btn-xs" title="Back">&#8617;</a></span></div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- form starts --}}
                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
                {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
                {{ Form::bsText('address', '', ['placeholder' => 'Business Address']) }}
                {{ Form::bsTextArea('bio', '', ['placeholder' => 'About This Business' ]) }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-success float-left m-2']) }}
                {!! Form::reset('Reset', ['class' => 'btn btn-secondary float-left m-2']) !!}
                {!! Form::close() !!}
                {{-- form ends --}}
            </div>
        </div>
    </div>
</div>

@endsection

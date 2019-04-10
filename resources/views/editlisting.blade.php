@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a class="float-right btn btn-outline-secondary btn-xs"
                                                         href="/dashboard">&#8617;</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('address', $listing->address, ['placeholder' => 'Business Address']) }}
                    {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About This Business' ]) }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-success float-left m-2']) }}
                    <a href="/dashboard/" class="btn btn-secondary float-left m-2">Cancel</a>
                    {{ Form::hidden('_method', 'PUT') }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

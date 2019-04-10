@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn
            btn-success btn-xs">Add Listing</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

               <h3>{{  Auth::user()->name  }}'s Listings</h3>
                @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{  $listing->name  }}</td>
                                <td><a class="btn btn-warning float-right m-2" href="/listings/{{  $listing->id
                                }}/edit">Edit</a></td>
                                <td>
                                    {{-- form starts --}}
                                    {!! Form::open(['action' => ['ListingsController@destroy', $listing->id ], 'method'
                                     => 'POST',
                                    'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                    {{  Form::hidden('_method', 'DELETE')  }}
                                    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger float-left m-2']) }}
                                    {!! Form::close() !!}
                                    {{-- form ends --}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

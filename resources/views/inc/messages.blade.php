@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{  $error  }}
        </div>
    @endforeach

@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{  Session('flash_message')  }}
    </div>
@endif


@extends('Admin.layout.Adminapp')
@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
      </div>
      @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Company Name ') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('Admin.store') }}">
                        @csrf
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                            <input for="multiple-select" name="TypeOfCompany" value="{{$TypeOfCompany}}" class=" form-control-label">
                            </div>
                            <div class="col col-md-9">
                                <select name="CompanyName" id="multiple-select" multiple="" class="form-control">
                                    @foreach($ToWhatCompany as $AdminTo)

                                    <option value="{{$AdminTo->name}}">{{$AdminTo->name}}</option>
                                    @endforeach
                           
                                </select>
                            </div><br  >
                        </div> 
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Phone</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="phone" placeholder="Text" class="form-control" value="{{$phone}}">
                                <br /><hr >
                                @foreach($user as $admin)
                                <p>Email: {{$admin->email}}</p>
                                @endforeach
                                <small class="form-text text-muted">This email-address has been Registerd As your Company Admin </small>
                            </div>
                        </div> <br  >
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm and sumit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
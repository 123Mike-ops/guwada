
@extends('RestaurantAdmin.layout.RestaurantApp')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30" style="margin-left:300px;">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-6" >
                        <div class="card">
                            <br /><br />
                            
                            <div class="card-body card-block" >
                                @foreach($deliverMan as $deliver)
                                                <form  action="{{ route('Assign.store',['id'=>$deliver->id,'mydeliveryid'=>$mydeliveryid]) }}" method="POST">
                                                
                                                    @csrf
                                                    @endforeach



                                                    {{-- <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter User\'s Phone Number') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="" autofocus>

                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="selectSm" class=" form-control-label"> Active Drivers</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="AdminAs" id="Select" class="form-control-sm form-control">
                                                                    @foreach($deliverMan as $deliver)

                                                                <option value="{{$deliver->id}}">{{$deliver->name}}</option>

                                                                    @endforeach
                                                                
                                                                
                                                            
                                                            </select>
                                                        </div>
                                                    </div>




                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Assign') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
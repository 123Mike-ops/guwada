@extends('Guest.layout')
@section('content')

<div class="col-xl-6 col-md-6" style="margin-left:100px;margin-top:100px;">
    <div class="card table-card">
        <div class="card-header">
            <h3>My Orders</h3>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="ik ik-chevron-left action-toggle"></i></li>
                    <li><i class="ik ik-minus minimize-card"></i></li>
                    <li><i class="ik ik-x close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-hover mb-0 without-header">
                    <tbody>
                        @foreach($myorder as $order)
                        <tr>
                            <td>
                                <div class="d-inline-block align-middle">
                                
                                    <div class="d-inline-block">
                                        <h6 class="mb-0">  {{$order->food_id}} </h6>
                                
                                        <p class="text-muted mb-0">    {{$order->quantity}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                {{-- <h6 class="fw-700">Birr&nbsp;{{$order->price}}.00<i class="fas fa-level-down-alt text-red ml-10"></i></h6> --}}
                            </td>
                        </tr>
                        @endforeach
            
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
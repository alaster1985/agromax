@include('layouts.header')
<main>
    {{--@if(session()->has('message'))--}}
        {{--<div class="alert alert-success" align="center">--}}
            {{--{{ session()->get('message') }}--}}
        {{--</div>--}}
    {{--@endif--}}
    <section class="container conformation ">
        <div class="row">
            <div class="offers__item offers__item--selected col-sm-4">
                <a class="offer__img-wr" href="#">
                    <img src="{{asset($lot->port_photo)}}" alt="Our offers">
                </a>
                @if($lot->product_id == 1)
                    <h3 class="offers__title">{{$lot->product_name}}</h3>
                @else
                    <h3 class="offers__title">{{$lot->product_new_name ?? \App\Product::find($lot->product_id)->name}}</h3>
                @endif
                <table class="offers__table">
                    <thead>
                    <tr>
                        <th>Incoterms</th>
                        <th>Amount</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{\App\Delivery::find($lot->delivery_id)->name}}</td>
                        <td>{{$lot->tons}} tons</td>
                        <td>{{$lot->price}} $</td>
                    </tr>
                    </tbody>
                </table>
                <table class="offers__table">
                    <thead>
                    <tr>
                        <th>Conditions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$lot->condition->condition}}</td>
                    </tr>
                    </tbody>
                </table>
                <table class="offers__table">
                    <thead>
                    <tr>
                        <th>Port</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$lot->port}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="conformation__wr col-sm-7 col-sm-offset-1">
                <h2 class="conformation__title">Fill the form</h2>
                @if ($errors)
                    <div class="error" style="color: #ff0000;" align="center">{{($errors->first())}}</div>
                @endif
                {{--                <form class="conformation__form" action="{{Route('createOrder')}}" method="POST" enctype="multipart/form-data">--}}
                <form class="conformation__form" id="confirmationForm"
                      action="{{ Request::root() . '/createOrder?' . Request::getQueryString()}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input name="first_name" value="{{old('first_name')}}" placeholder="First Name" class="form-control" type="text">
                    </div>
                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input name="last_name" value="{{old('last_name')}}" placeholder="Last Name" class="form-control" type="text">
                    </div>

                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fab fa-linkedin"></i></span>
                        <input name="linkedin" value="{{old('linkedin')}}" placeholder="Linkedin" class="form-control" type="text">
                    </div>

                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input name="email" value="{{old('email')}}" placeholder="E-Mail" class="form-control" type="text">
                    </div>


                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                        <input name="phone" value="{{old('phone')}}" placeholder="Telephone" class="form-control" type="text">
                    </div>

                    <div class="conformation__item input-group">
                        <span class="input-group-addon"><i class="fas fa-building"></i></span>
                        <input name="company" value="{{old('company')}}" placeholder="Company" class="form-control" type="text">
                    </div>

                    <input class="conformation__btn" type="submit" value="Confirm">

                </form>
            </div>
        </div>
    </section>
    <div @if (session()->has('message')) class="modal-overlay active" @else class="modal-overlay" @endif></div>
    <div @if (session()->has('message')) class="modal__confirm active" @else class="modal__confirm" @endif>Your order has been processed<span class="modal__confirm-close fa fa-times"></span>
    {{--<div class="modal__confirm">Your order has been processed<span class="modal__confirm-close fa fa-times"></span>--}}
    </div>
</main>
@include('layouts.footer')

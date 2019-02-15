@include('layouts.header')
<main>
    <section class="container exclusive">
        <div class="row">
            <h2 class="exclusive__title visually-hidden">Exclusive order</h2>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img class="exclusive__img" src="{{asset('images/port.jpg')}}" alt="Exclusive order">
                @if ($errors)
                    <div class="error" style="color: #ff0000;" align="center">{{($errors->first())}}</div>
                @endif
                <form action="{{Route('exConfirm')}}" id="exclusiveForm" method="GET" enctype="multipart/form-data">
                    @csrf
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Name</span>
                        <select class="exclusive__select-name" id="exclusive-name" name="product">
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{ucfirst($product->name)}}</option>
                            @endforeach
                            <option value="1">Other</option>
                        </select>
                    </div>
                    <div class="exclusive__item exclusive__item-other-name input-group" id="other-name">
                        <span class="exclusive__title input-group-addon">Other name</span>
                        <input class="form-control other" value="{{old('otherName')}}" name="otherName" placeholder="Other name" type="text">
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Incoterms</span>
                        <select class="exclusive__select-incoterms" name="delivery">
                            @foreach($deliveries as $delivery)
                            <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Amount</span>
                        <input class="form-control" name="amount" value="{{old('amount')}}" placeholder="Amount" type="text">
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Optional price</span>
                        <input class="form-control" name="optional" value="{{old('optional')}}" placeholder="Optional price" type="text">
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Max price</span>
                        <input class="form-control" name="max" value="{{old('max')}}" placeholder="Max price" type="text">
                    </div>
                    <input class="exclusive__btn" type="submit" value="Make order">
                </form>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')
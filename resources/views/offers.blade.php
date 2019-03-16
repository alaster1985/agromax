@include('layouts.header')
<main>
    <section class="offers container">
        <div class="row offers__list  col-sm-12">
            @if(isset($category))
                <h2 class="offers__title"><strong>{{$category}}</strong> is our major proposal</h2>
            @else
                <h2 class="offers__title">Our major proposal</h2>
                <h6 class="site-nav__link">{{$lots->links()}}</h6>
            @endif
            @foreach($lots as $lot)
                <div class="offers__item col-sm-4 col-md-3">
                    <a class="offer__img-wr"
                       href="{{ Request::root() . '/confirmation?lang=' . (Request::all()['lang'] ?? 'en_GB') . '&offer=' . $lot->id}}">
                        @if($lot->special)
                            <img style="width: 5%; position: absolute; top: 0; left: 0;" src="{{asset('images/hotoffer.jpg')}}">
                        @endif
                        <img src="{{asset($lot->product->photo)}}" alt="Our offers">
                    </a>
                    <h3 class="offers__title"><strong>{{$lot->product_name ?? $lot->product->name}}</strong></h3>
                    <p class="products__desc">{{$lot->description ?? \App\Product::find($lot->product_id)->description}}</p>
                    <table class="offers__table for_offers_table">
                        <thead>
                        <tr>
                            <th>Incoterms</th>
                            <th>Port</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$lot->delivery->name}}</td>
                            <td>{{$lot->port}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="offers__table for_offers_table">
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
                            <th>Amount</th>
                            <th>Price/ton</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$lot->tons}} tons</td>
                            <td>from {{$lot->price}}$</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="offers__btn"
                       href="{{ Request::root() . '/confirmation?lang=' . (Request::all()['lang'] ?? 'en_GB') . '&offer=' . $lot->id}}">Make
                        order</a>
                </div>

            @endforeach
            @if(!isset($category))
                <h6 class="site-nav__link">{{$lots->links()}}</h6>
            @endif
        </div>
    </section>
</main>
@include('layouts.footer')
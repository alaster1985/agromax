@include('layouts.header')
<main>
    <section class="offers container">
        <div class="row offers__list  col-sm-12">
            @if(isset($category))
                <h2 class="offers__title">{{$category}} is our major proposal</h2>
            @else
                <h2 class="offers__title">Our major proposal</h2>
                <h6 class="site-nav__link">{{$lots->links()}}</h6>
            @endif
            @foreach($lots as $lot)
                <div class="offers__item col-sm-4 col-md-3">
                    <a class="offer__img-wr"
                       href="{{ Request::root() . '/confirmation/?' . Request::getQueryString() . '&offer=' . $lot->id}}">
                        <img src="{{asset($lot->product->photo)}}" alt="Our offers">
                    </a>
                    <h3 class="offers__title">{{$lot->product_name ?? $lot->product->name}}</h3>
                    <p class="products__desc">{{$lot->description ?? \App\Product::find($lot->product_id)->description}}</p>
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
                            <td>{{$lot->delivery->name}}</td>
                            <td>{{$lot->tons}} tons</td>
                            <td>{{$lot->price}}$</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="offers__btn"
                       href="{{ Request::root() . '/confirmation/?' . Request::getQueryString() . '&offer=' . $lot->id}}">Make
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
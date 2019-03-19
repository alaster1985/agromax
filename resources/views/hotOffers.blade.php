@include('layouts.header')
<main>
    <section class="offers container">
        <div class="row offers__list  col-sm-12">
            @foreach($lots as $lot)
                <div itemscope itemtype="http://schema.org/Product">
                    <div class="offers__item col-sm-4 col-md-3">
                        <a itemprop="url" class="offer__img-wr"
                           href="{{ Request::root() . '/confirmation?lang=' . (Request::all()['lang'] ?? 'en_GB') . '&offer=' . $lot->id}}">
                            @if($lot->special)
                                <img class="hot_offer_img" src="{{asset('images/hotoffer.png')}}">
                            @endif
                            <img itemprop="image" src="{{asset($lot->product->photo)}}" alt="Our offers">
                        </a>
                        <h3 itemprop="name" class="offers__title"><strong>{{$lot->product_name ?? $lot->product->name}}</strong></h3>
                        <p itemprop="description" class="products__desc">{{$lot->description ?? \App\Product::find($lot->product_id)->description}}</p>
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
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
                                    <td>from <span itemprop="price">{{$lot->price}}</span><span itemprop="priceCurrency" content="USD">$</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <a itemprop="url" class="offers__btn"
                           href="{{ Request::root() . '/confirmation?lang=' . (Request::all()['lang'] ?? 'en_GB') . '&offer=' . $lot->id}}">Make
                            order</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@include('layouts.footer')
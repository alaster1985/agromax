@include('layouts.header')

<main>
    @include('layouts.slider')
    <section class="products container">
        <div class="row products__list">
            <h2 class="products__main-title col-sm-12">Our products</h2>
            <div class="products__main">
                <h3 class="products__main-title  col-sm-12">AgroMax makes focus at trade with products for health food but can offer to buyers wholesale supplies of ...</h3>
            @foreach($categories as $category)
                <div class="products__item col-sm-4 col-md-3">
                    <a class="products__img-wr" href="/offers/{{$category->id}}">
                        <img src="{{asset($category->photo)}}" alt="{{$category->name}}">
                    </a>
                    <h3 class="products__title">{{$category->name}}</h3>
                    <p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                        sollicitudin mi
                        ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.
                        Ut
                        malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>
                    <a class="products__btn" href="/offers">Our offers</a>
                </div>
            @endforeach
            </div>
            <div class="products__others">
                <h2 class="products__main-title  col-sm-12">AgroMax trades with next products too.</h2>
                <div class="products__other-groups">

                    @foreach($specialLots as $specialLot)

                    {{--<div class="products__item col-sm-4 col-md-3">--}}
                        {{--<a class="products__img-wr" href="/confirmation/{{$specialLot->id}}">--}}
                            {{--<img src="{{asset($specialLot->photo)}}" alt="{{$specialLot->name}}">--}}
                        {{--</a>--}}
                        {{--<h3 class="products__main-title ">{{$specialLot->name}}</h3>--}}
                        {{--<p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin--}}
                            {{--sollicitudin mi--}}
                            {{--ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.--}}
                            {{--Ut--}}
                            {{--malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>--}}
                        {{--<a class="products__btn" href="/offers">Our offers</a>--}}
                    {{--</div>--}}

                        <div class="offers__item col-sm-4 col-md-3">
                            <a class="offer__img-wr" href="/confirmation/{{$specialLot->id}}">
                                <img src="{{asset($specialLot->photo)}}" alt="Our offers">
                            </a>
                            <h3 class="offers__title">{{$specialLot->name}}</h3>
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
                                    <td>{{$specialLot->delivery}}</td>
                                    <td>{{$specialLot->tons}} tons</td>
                                    <td>{{$specialLot->price}}$</td>
                                </tr>
                                </tbody>
                            </table>
                            <a class="offers__btn" href="/confirmation/{{$specialLot->id}}">Make order</a>
                        </div>

                    @endforeach

                    {{--<div class="products__item col-sm-4 col-md-3">--}}
                        {{--<a class="products__img-wr" href="/offers/{{$category->id}}">--}}
                            {{--<img src="{{asset($category->photo)}}" alt="{{$category->name}}">--}}
                        {{--</a>--}}
                        {{--<h3 class="products__main-title ">{{$category->name}}</h3>--}}
                        {{--<p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin--}}
                            {{--sollicitudin mi--}}
                            {{--ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.--}}
                            {{--Ut--}}
                            {{--malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>--}}
                        {{--<a class="products__btn" href="/offers">Our offers</a>--}}
                    {{--</div>--}}
                    {{--<div class="products__item col-sm-4 col-md-3">--}}
                        {{--<a class="products__img-wr" href="/offers/{{$category->id}}">--}}
                            {{--<img src="{{asset($category->photo)}}" alt="{{$category->name}}">--}}
                        {{--</a>--}}
                        {{--<h3 class="products__title">{{$category->name}}</h3>--}}
                        {{--<p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin--}}
                            {{--sollicitudin mi--}}
                            {{--ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.--}}
                            {{--Ut--}}
                            {{--malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>--}}
                        {{--<a class="products__btn" href="/offers">Our offers</a>--}}
                    {{--</div>--}}
                    {{--<div class="products__item col-sm-4 col-md-3">--}}
                        {{--<a class="products__img-wr" href="/offers/{{$category->id}}">--}}
                            {{--<img src="{{asset($category->photo)}}" alt="{{$category->name}}">--}}
                        {{--</a>--}}
                        {{--<h3 class="products__title">{{$category->name}}</h3>--}}
                        {{--<p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin--}}
                            {{--sollicitudin mi--}}
                            {{--ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.--}}
                            {{--Ut--}}
                            {{--malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>--}}
                        {{--<a class="products__btn" href="/offers">Our offers</a>--}}
                    {{--</div>--}}
                    {{--<div class="products__item col-sm-4 col-md-3">--}}
                        {{--<a class="products__img-wr" href="/offers/{{$category->id}}">--}}
                            {{--<img src="{{asset($category->photo)}}" alt="{{$category->name}}">--}}
                        {{--</a>--}}
                        {{--<h3 class="products__title">{{$category->name}}</h3>--}}
                        {{--<p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin--}}
                            {{--sollicitudin mi--}}
                            {{--ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.--}}
                            {{--Ut--}}
                            {{--malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>--}}
                        {{--<a class="products__btn" href="/offers">Our offers</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

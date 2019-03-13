@include('layouts.header')

<main>
    @include('layouts.slider')
    <section class="products container">
        <div class="row products__list">
            <h2 class="products__main-title col-sm-12">{{$newNavNames[8] ?? 'Our products'}}</h2>
            <div class="products__main">
                {{--<h3 class="visually-hidden products__main-title  col-sm-12">AgroMax makes focus at trade with products for health food but can offer to buyers wholesale supplies of ...</h3>--}}
                @foreach($categoriesUp as $category)
                    <div class="products__item col-sm-4 col-md-3">
                        <a class="products__img-wr" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">
                            <img src="{{asset($category->photo)}}" alt="{{$category->new_name ?? $category->name}}">
                        </a>
                        <h3 class="products__title">{{$category->new_name ?? $category->name}}</h3>
                        <p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            sollicitudin mi
                            ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.
                            Ut
                            malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>
                        <a class="products__btn" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">{{$newNavNames[7] ?? 'Our offers'}}</a>
                    </div>
                @endforeach
            </div>
            <div class="products__others">
                <h2 class="products__main-title  col-sm-12">{{$newNavNames[9] ?? 'AgroMax trades with next products too.'}}</h2>
                <div class="products__other-groups">

                    @foreach($categoriesLow as $category)
                        <div class="products__item col-sm-4 col-md-3">
                            <a class="products__img-wr" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">
                                <img src="{{asset($category->photo)}}" alt="{{$category->new_name ?? $category->name}}">
                            </a>
                            <h3 class="products__title">{{$category->new_name ?? $category->name}}</h3>
                            <p class="products__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                sollicitudin mi
                                ullamcorper, suscipit erat ac, pharetra magna. Donec vitae pharetra neque, at pulvinar mauris.
                                Ut
                                malesuada ante vitae metus maximus, quis maximus nisl mollis.</p>
                            <a class="products__btn" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">{{$newNavNames[7] ?? 'Our offers'}}</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

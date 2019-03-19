@include('layouts.header')

<main>
    @include('layouts.slider')
    <section class="products container">
        <div class="row products__list">
            <h2 class="products__main-title col-sm-12">{{$newNavNames[8] ?? 'Our products'}}</h2>
            <div class="products__main">
                @foreach($categoriesUp as $category)
                    <div class="products__item col-sm-4 col-md-3">
                        <a class="products__img-wr" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">
                            <img src="{{asset($category->photo)}}" alt="{{$category->new_name ?? $category->name}}">
                        </a>
                        <h3 class="products__title"><strong>{{$category->new_name ?? $category->name}}</strong></h3>
                        <a class="products__btn" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">{{$newNavNames[7] ?? 'Our offers'}}</a>
                    </div>
                @endforeach
            </div>
            <div class="products__others">
                <h2 class="products__main-title for_categoriesLow col-sm-12">{{$newNavNames[9] ?? 'AgroMax trades with next products too.'}}</h2>
                <div class="products__other-groups">
                    @foreach($categoriesLow as $category)
                        <div class="products__item col-sm-4 col-md-3">
                            <a class="products__img-wr" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">
                                <img src="{{asset($category->photo)}}" alt="{{$category->new_name ?? $category->name}}">
                            </a>
                            <h3 class="products__title"><strong>{{$category->new_name ?? $category->name}}</strong></h3>
                            <a class="products__btn" href="offers?lang={{Request::all()['lang'] ?? 'en_GB'}}&cat={{$category->id}}">{{$newNavNames[7] ?? 'Our offers'}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

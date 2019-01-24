@include('layouts.header')

<main>
    @include('layouts.slider')
    <section class="products container">
        <div class="row products__list">
            <h2 class="products__main-title col-sm-12">Our products</h2>
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
    </section>
</main>

@include('layouts.footer')
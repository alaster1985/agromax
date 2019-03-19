@include('layouts.header')
<main>
    <section class="charity container">
        <div class="row">
            <div class="charity__info col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="charity__img-wrapper col-sm-6">
                    <img src="images/charity-2.jpg" alt="Charity">
                </div>
                <div class="charity__desc col-sm-6">
                    <p class="charity__desc">{{$charityInfo ?? '"AgroMax trades with products for health food industry and does the support to health..".'}}</p>
                </div>
            </div>

            @foreach($charityPosts as $post)

            <div class="charity__event col-sm-12 col-md-10 col-md-offset-1">
                <img class="charity__item-img col-sm-6  col-md-5" src="{{asset($post->photo)}}" alt="Events">
                <div class="charity__content col-sm-12 col-md-6">
                    <h2 class="charity__item-title">{{$post->new_title ?? $post->title}}</h2>
                    <p  class="fcharity__item-descr">{{$post->new_post ?? $post->post}}</p>
                </div>
            </div>

            @endforeach

        </div>
    </section>
</main>
@include('layouts.footer')

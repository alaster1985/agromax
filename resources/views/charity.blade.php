@include('layouts.header')
<main>
    <section class="charity container">
        <div class="row">

            <div class="charity__info col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="charity__img-wrapper col-sm-6">
                    <img src="images/charity-2.jpg" alt="Charity">
                </div>
                <div class="charity__desc col-sm-6">
                    <p class="charity__desc">{{$charityInfo[0] ?? '"AgroMax trades with products for health food industry and does the support to health..".'}}</p>
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
            {{--<div class="charity__event col-sm-12 col-md-10 col-md-offset-1">--}}
                {{--<img class="charity__item-img col-sm-6  col-md-5" src="images/port.jpg" alt="Events">--}}
                {{--<div class="charity__content col-sm-12 col-md-6">--}}
                    {{--<h2 class="charity__item-title">{{$charityInfo[1] ?? 'Lorem ipsum dolor sit amet'}}</h2>--}}
                    {{--<p  class="fcharity__item-descr">{{$charityInfo[2] ?? 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.'}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="charity__event col-sm-12 col-md-10 col-md-offset-1">--}}
                {{--<img class="charity__item-img col-sm-6  col-md-5" src="images/port.jpg" alt="Events">--}}
                {{--<div class="charity__content col-sm-12 col-md-6">--}}
                    {{--<h2 class="charity__item-title">{{$charityInfo[3] ?? 'Lorem ipsum dolor sit amet'}}</h2>--}}
                    {{--<p  class="fcharity__item-descr">{{$charityInfo[4] ?? 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.'}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </section>
</main>
@include('layouts.footer')

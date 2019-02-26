@include('layouts.header')
<main>
    <section class="foundation container">
        <div class="row">
            <div class="foundation__info-wr col-sm-12 col-md-10 col-md-offset-1">
                <img class="foundation__img col-sm-6  col-md-6" src="images/founder_photo.jpg" alt="Our founder">
                <div class="foundation__content col-sm-12 col-md-6">
                    <h2 class="foundation__title">{{$founderInfo[0] ?? 'Hello friends, My name is Maksym Ratner, below is my story...'}}</h2>
                    <p class="foundation__text">{{$founderInfo[1] ?? 'I was 16 years teenager just and I have got the job in trading company of my Dad. It was not journey in office just it was hard and intense job. Though my Dad offered me his financial assist for MBA degree , I have declined his offer. MBA degree was not interesting for me but real business was much interesting.'}}</p>
                    <p class="foundation__text">{{$founderInfo[2] ?? 'My Dad brought to me his business skills and his craft and helped me to create my own.Sunflower market, where our company did focus, grew up  intense but our business with Dad grew up more intense just.More and more bigger contracts , more and more earns but it was not what I looked for.'}}</p>
                    <p class="foundation__text">{{$founderInfo[3] ?? 'The super intense job  has impended the relationships with my family.I was losing normal and nice relationship with my family. My healthy was drained deeply. I have changed my food , I have made focus at healthy food and intense trainings in gym.Thanks to it I could return the balance between job and family. My problems with my healthy were my reinvention in business.I just looked around myself and explored - a lot of managers have similar problems.I\'ve took decision to establish company to facilitate health food & agro trading, so, I\'ve created "AgroMax".'}}</p>
                </div>
            </div>
            {{--<div class="col-sm-12 col-md-10 col-md-offset-1">--}}
            {{--<iframe class="founder__presentation" src="{{$founderInfo[4] ?? 'https://www.youtube.com/embed/fKopy74weus'}}"></iframe>--}}
            {{--</div>--}}
            @foreach($videos as $video)
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <video class="founder__presentation" controls>
                        <source src="{{asset('videos/' . $video)}}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            @endforeach
        </div>
    </section>
</main>
@include('layouts.footer')

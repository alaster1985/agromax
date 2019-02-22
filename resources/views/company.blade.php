@include('layouts.header')
<main>
    <section class="company container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 company__div">
                <div class="col-sm-3 col-md-4 col-md-offset-0">
                    <img src="images/logo.jpg" alt="Agromax">
                </div>
                <div class="company__desc-wrapper col-md-8 ">
                    <p class="company__desc">{{$companyInfo[0] ?? '"AgroMax" - is trading company working at market of health food (wholesales segment).'}}</p>
                    <p class="company__desc">{{$companyInfo[1] ?? 'Our company headquartered in Sofia ( Bulgaria) and has its operational offices in Kharkov( Ukraine) and in Romania.'}}</p>
                    <p class="company__desc">{{$companyInfo[2] ?? 'Our market mission - to facilitate the trade with agricultures for health food industry from  Black Sea countries\' farms.'}}</p>
                </div>
            </div>
            @foreach($presentations as $presentation)
                <div class="col-sm-12 col-md-10 col-md-offset-1 company__div">
                    <iframe class="founder__presentation" src="{{asset($presentation->file_path)}}"
                            scrolling="no"></iframe>
                </div>
            @endforeach
        </div>
    </section>
</main>
@include('layouts.footer')

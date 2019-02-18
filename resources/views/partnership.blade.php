@include('layouts.header')

<main>
    <section class="partnership container">
        <div class="row">
            <div class="partnership__img-wrapper col-sm-6">
                <img src="images/partnership.jpg" alt="Partnership">
            </div>
            <div class="partnership__info col-sm-6">
                <h2 class="partnership__title">{{$partnershipInfo[0] ?? 'Our partnership program'}}</h2>
                <p class="partnership__link-wrapper">{{$partnershipInfo[1] ?? 'Thanks to market analysis, digital marketing and well organized event management AgroMax can facilitate its partner farms trade with higher margin.'}}</p>
                <p class="partnership__link-wrapper">{{$partnershipInfo[2] ?? 'Thanks to well partnership with the farms from Black Sea region AgroMax can provide with more cheaper productd to its partner wholesale buyers.'}}</p>
                <p class="partnership__link-wrapper">
                    <h3 class="partnership__title-link">{{$partnershipInfo[3] ?? 'Please contact about our partnership program:'}}</h3>
                    <a class="partnership__link" href="mailto:marketing@agromax.farm">marketing@agromax.farm</a>
                </p>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

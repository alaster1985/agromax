@include('layouts.header')
<main>
    <section class="contacts container">
        <div class="row">
            <div class="contacts__map-wrapper col-sm-6">
                {{--<iframe class="contacts__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93836.55762368724!2d23.253906899555897!3d42.69541081461318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2z0KHQvtGE0LjRjywg0JHQvtC70LPQsNGA0LjRjw!5e0!3m2!1sru!2sua!4v1548317624449" width="600" height="450px"></iframe>--}}
                <iframe class="contacts__map" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%D0%91%D0%BE%D0%BB%D0%B3%D0%B0%D1%80%D0%B8%D1%8F%20%D0%A1%D0%BE%D1%84%D0%B8%D1%8F%20%D0%91%D1%8A%D0%BB%D0%B3%D0%B0%D1%80%D1%81%D0%BA%D0%B0%20%D0%BB%D0%B5%D0%B3%D0%B8%D1%8F%2028+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" width="600" height="450px"></iframe>
            </div>
            <div class="col-sm-6">
                <h2 class="contacts__title">{{$contactsInfo[0] ?? 'Please contact:'}}</h2>
                <p class="contacts__link-wrapper">
                    <h3 class="contacts__title-link">{{$contactsInfo[1] ?? 'About membership in professional associations and business events:'}}</h3>
                    <a class="contacts__link" href="mailto:marketing@agromax.farm">marketing@agromax.farm</a>
                </p>
                <p class="contacts__link-wrapper">
                    <h3 class="contacts__title-link">{{$contactsInfo[2] ??'About organizational issues and job:'}}</h3>
                    <a class="contacts__link" href="mailto:office@agromax.farm">office@agromax.farm</a>
                </p>
                <p class="contacts__link-wrapper">
                    <h3 class="contacts__title-link">{{$contactsInfo[3] ?? 'About strategic partnership:'}}</h3>
                    <a class="contacts__link" href="mailto:maksym.ratner@agromax.farm">maksym.ratner@agromax.farm</a>
                </p>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')

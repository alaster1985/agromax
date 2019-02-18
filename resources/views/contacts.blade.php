@include('layouts.header')
<main>
    <section class="contacts container">
        <div class="row">
            <div class="contacts__map-wrapper col-sm-6">
                <iframe class="contacts__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93836.55762368724!2d23.253906899555897!3d42.69541081461318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2z0KHQvtGE0LjRjywg0JHQvtC70LPQsNGA0LjRjw!5e0!3m2!1sru!2sua!4v1548317624449" width="600" height="450px"></iframe>
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

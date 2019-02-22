</div>
<footer class="footer container">
    <div class="container">
        <div class="row">
            <div class="footer__nav-wrapper col-sm-12 clearfix">
                <div class="socials-nw-wr  col-sm-5 col-md-4">
                    <ul class="socials-nw">
                        <li class="socials-nw__item" @if(\App\Social::find(1)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-skype" href="skype:{{\App\Social::find(1)->contact}}?call" target="_blank"><span class="visually-hidden">Skype</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(2)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-viber" href="viber://chat?number={{\App\Social::find(2)->contact}}" target="_blank"><span class="visually-hidden">Viber</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(3)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-whatsapp" href="https://api.whatsapp.com/send?phone={{\App\Social::find(3)->contact}}" target="_blank"><span class="visually-hidden">Whatsapp</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(4)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-telegram" href="tg://resolve?domain={{\App\Social::find(4)->contact}}" target="_blank"><span class="visually-hidden">Telegram</span></a></li>
                    </ul>
                </div>
                <div class="socials-nw-wr  col-sm-4">
                    <ul class="socials-nw">
                        <li class="socials-nw__item" @if(\App\Social::find(5)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-facebook-f" href="{{\App\Social::find(5)->contact}}" target="_blank"><span class="visually-hidden">Facebook</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(6)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-linkedin" href="{{\App\Social::find(6)->contact}}" target="_blank"><span class="visually-hidden">Linkedin</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(7)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-twitter" href="{{\App\Social::find(7)->contact}}" target="_blank"><span class="visually-hidden">Twitter</span></a></li>
                        <li class="socials-nw__item" @if(\App\Social::find(8)->disable) style="display: none" @else style="display: inline-block" @endif><a class="socials-nw__link fab fa-instagram" href="{{\App\Social::find(8)->contact}}" target="_blank"><span class="visually-hidden">Instagram</span></a></li>
                    </ul>
                </div>
                <div class="footer__info col-sm-3 col-md-4">
                    <div class="footer__info-more-wr">
                        <h3 class="footer__info-tilte footer__info-tilte--dec">Email:</h3>
                        <a class="footer__info-link"  href="mailto:sales@agromax.farm">sales@agromax.farm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.localizationTool.min.js')}}"> </script>
<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/customscripts.js')}}"></script>

</body>
</html>


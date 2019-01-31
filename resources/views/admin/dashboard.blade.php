@include('admin/layouts.header')
<div class="page-container menu-left">
    <aside class="sidebar">
        <div class="menu-sec">
            <div id="menu-toogle" class="menus">
                <div class="single-menu">
                    {{--@unless ($user->hasRole('moderator|logistics|manager'))--}}
                    <h2><a title=""><i class="fa fa-user"></i><span>Пользователи</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('viewUsers')}}--}}" title="">Все пользователи</a></li>
                            <li><a href="{{--{{route('createUser')}}--}}" title="">Создать пользователя</a></li>
                        </ul>
                    </div>
                </div>
                {{--@endunless--}}
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-desktop"></i><span>Заказы</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('viewOrders')}}--}}" title="">Все заказы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-desktop"></i><span>Заявки</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('viewApplications')}}--}}" title="">Все заявки</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-paperclip"></i><span>Галерея</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('createPhoto')}}--}}" title="">Добавить фотографию</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{--{{route('viewPhoto')}}--}}" title="">Все фотографии</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-paperclip"></i><span>Видео</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('viewVideos')}}--}}" title="">Все видео</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-paperclip"></i><span>Социальные сети</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{--{{route('viewSocials')}}--}}" title="">Все cоциальные сети</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
</div>


<script type="text/javascript" src="{{asset('js/dash/jquery-1.11.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dash/script.js       ')}}"></script>
<script type="text/javascript" src="{{asset('js/dash/bootstrap.js    ')}}"></script>
<script type="text/javascript" src="{{asset('js/dash/enscroll.js     ')}}"></script>
</body>
</html>
<div class="page-container menu-left">
    <aside class="sidebar">
        <div class="menu-sec">
            <div id="menu-toogle" class="menus">
                <div class="single-menu">
                    @if(\App\User::find(Auth::id())->role_id === 1)
                        <h2><a title=""><i class="fa fa-user"></i><span>Users</span></a></h2>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('viewUsers')}}" title="">All Users</a></li>
                                <li><a href="{{route('createUser')}}" title="">Create User</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-desktop"></i><span>Orders</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{route('viewOrders')}}" title="">All Orders</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-desktop"></i><span>Categories</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{route('viewCategories')}}" title="">All Categories</a></li>
                        </ul>
                        @if(\App\User::find(Auth::id())->role_id === 3)
                        @else
                            <ul>
                                <li><a href="{{route('createCategory')}}" title="">Create Category</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-paperclip"></i><span>Lots</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{route('viewLots')}}" title="">All Lots</a></li>
                        </ul>
                        @if(\App\User::find(Auth::id())->role_id === 3)
                        @else
                        <ul>
                            <li><a href="{{route('createLot')}}" title="">Create Lot</a></li>
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="single-menu">
                    <h2><a title=""><i class="fa fa-desktop"></i><span>Languages</span></a></h2>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="{{route('viewLanguages')}}" title="">All Languages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>

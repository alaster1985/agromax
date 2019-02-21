@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>SOCIALS</h1>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div><!-- title Date Range -->
        <div class="row">
            <div class="masonary-grids">
                <div class="col-md-12">
                    <div class="widget-area">
                        @if ($errors)
                            <div class="error" style="display: block">{{($errors->first())}}</div>
                        @endif
                        <div class="streaming-table">
                            @if(session()->has('message'))
                                <div class="alert alert-success" align="center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <span id="found" class="label label-info"></span>
                            <table id="stream_table" class='table table-striped table-bordered'>
                                <thead>
                                <tr>
                                    <th>Social</th>
                                    <th>Contact</th>
                                    <th>Disable</th>
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                        <th>Edit</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allSocials as $social)
                                    <tr id="trId">
                                        <td>
                                            {{$social->name}}
                                        </td>
                                        <td>
                                            {{$social->contact}}
                                        </td>
                                        <td>
                                            {{$social->disable ? 'YES' : 'NO'}}
                                        </td>
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                            <td>
                                                <a href="editSocials?social={{$social->id}}">+</a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Content Sec -->
        </div><!-- Page Container -->
    </div><!-- main -->
</div>
@include('admin/layouts.footer')
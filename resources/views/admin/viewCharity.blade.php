@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CHARITY</h1>
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
                                    <th>Post ID</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Disable</th>
                                    <th>Post</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                        <th>Edit</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCharityPosts as $charityPost)
                                    <tr id="trId">
                                        <td>
                                            {{$charityPost->id}}
                                        </td>
                                        <td>
                                            {{$charityPost->title}}
                                        </td>
                                        <td>
                                            <img style="height: 75px" src="{{asset($charityPost->photo)}}">
                                        </td>
                                        <td>
                                            {{$charityPost->disable ? 'YES' : 'NO'}}
                                        </td>
                                        <td>
                                            {{$charityPost->post}}
                                        </td>
                                        <td>
                                            {{$charityPost->created_at}}
                                        </td>
                                        <td>
                                            {{$charityPost->updated_at}}
                                        </td>
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                            <td>
                                                <a href="editCharityPosts?post_id={{$charityPost->id}}">+</a>
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
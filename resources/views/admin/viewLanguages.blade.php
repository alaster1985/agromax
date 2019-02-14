@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>LANGUAGES</h1>
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
                            <span id="found" class="label label-info"></span>
                            <table id="stream_table" class='table table-striped table-bordered'>
                                <thead>
                                <tr>
                                    <th>Language</th>
                                    <th>Code</th>
                                    <th>Disable</th>
                                    {{--<th>Code Page</th>--}}
                                    {{--<th>Created_at</th>--}}
                                    {{--<th>Updated_at</th>--}}
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                        <th>Edit</th>
                                        {{--<th>Delete</th>--}}
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allLanguages as $language)
                                    <tr id="trId">
                                        <td>
                                            {{$language->name}}
                                        </td>
                                        <td>
                                            {{$language->code}}
                                        </td>
                                        <td>
                                            {{$language->disable ? 'NO' : 'YES'}}
                                        </td>
                                        {{--<td>--}}
                                            {{--{{$language->code_page}}--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--{{$language->created_at}}--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--{{$language->updated_at}}--}}
                                        {{--</td>--}}
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                            <td>
                                                <a href="editLanguages?lang={{$language->id}}">+</a>
                                            </td>
                                            {{--<td>--}}
                                                {{--<a href="removeLanguages?lang={{$language->id}}">+</a>--}}
                                            {{--</td>--}}
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
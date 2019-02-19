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
                        @if ($errors)
                            <div class="error" style="display: block">{{($errors->first())}}</div>
                        @endif
                        <div class="streaming-table">
                            @if(session()->has('message'))
                                <div class="alert alert-success" align="center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if(\App\User::find(Auth::id())->role_id === 3)
                            @else
                                <form action="{{Route('uploadTranslationFile')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="col-md-4">
                                        <div class="inline-form">
                                            <label class="c-label">New Translation File</label>
                                            <input class="input-style" name="translation" type="file"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="inline-form">
                                            <button type="submit" {{--disabled--}} class="btn btn-success">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <a class="c-label" href="{{route('downloadTranslationFile')}}">Download current translation file</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <a class="input-style" href="{{route('downloadBasicTranslationFile')}}">Download basic translation file</a>
                                    </div>
                                </div>
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
                                            {{$language->disable ? 'YES' : 'NO'}}
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
@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>PRESENTATIONS</h1>
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
                                    <th>Presentation</th>
                                    <th>File</th>
                                    <th>Disable</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                        <th>Edit</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allPresentations as $presentation)
                                    <tr id="trId">
                                        <td>
                                            {{$presentation->name}}
                                        </td>
                                        <td>
                                            <a href="{{asset($presentation->file_path)}}" target="_blank">VIEW_PRESENTATION</a>
                                        </td>
                                        <td>
                                            {{$presentation->disable ? 'YES' : 'NO'}}
                                        </td>
                                        <td>
                                            {{$presentation->created_at}}
                                        </td>
                                        <td>
                                            {{$presentation->updated_at}}
                                        </td>
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                            <td>
                                                <a href="editPresentations?pdf_id={{$presentation->id}}">+</a>
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
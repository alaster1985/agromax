@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CATEGORIES</h1>
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
                                    <th>Category</th>
                                    <th>Photo</th>
                                    <th>Type</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Edit</th>
                                    {{--@if($user->hasRole('admin'))--}}
                                    {{--<th>Delete</th>--}}
                                    {{--@endif--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCategories as $category)
                                    <tr id="trId">
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            <img style="height: 33%" src="{{asset($category->photo)}}">
                                        </td>
                                        <td>
                                            {{$category->type}}
                                        </td>
                                        <td>
                                            {{$category->created_at}}
                                        </td>
                                        <td>
                                            {{$category->updated_at}}
                                        </td>
                                        {{--@if($user->hasRole('admin|junior_admin|moderator'))--}}
                                        <td>
                                            <a href="{{--{{route('editOrder',$value->id)}}--}}">+</a>
                                        </td>
                                        {{--@endif--}}
                                        {{--@if($user->hasRole('admin'))--}}
                                        {{--<td>--}}
                                            {{--{{ csrf_field()}}--}}
                                            {{--<a href="--}}{{--{{route('deleteOrder',$value->id)}}--}}{{--"--}}
                                               {{--onclick="return confirm('Are you sure you want to delete this Order?');">-</a>--}}
                                            {{--{{ csrf_field()}}--}}
                                        {{--</td>--}}
                                        {{--@endif--}}
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
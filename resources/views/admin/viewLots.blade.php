@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>LOTS</h1>
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
                            {{$allLots->links()}}
                            <table id="stream_table" class='table table-striped table-bordered'>
                                <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product name</th>
                                    <th>Product photo</th>
                                    <th>Category</th>
                                    <th>Incoterms</th>
                                    <th>Amount</th>
                                    <th>Price  per ton</th>
                                    <th>Port</th>
                                    <th>Port photo</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                    <th>Edit</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allLots as $lot)
                                    <tr id="trId">
                                        <td>
                                            {{\App\Lot::find($lot->id)->product->id}}
                                        </td>
                                        <td>
                                            {{\App\Lot::find($lot->id)->product->name}}
                                        </td>
                                        <td>
                                            <img style="height: 75px" src="{{asset(\App\Lot::find($lot->id)->product->photo)}}">
                                        </td>
                                        <td>
                                            {{\App\Product::find($lot->product_id)->category->name}}
                                        </td>
                                        <td>
                                            {{\App\Delivery::find($lot->delivery_id)->name}}
                                        </td>
                                        <td>
                                            {{$lot->tons}}
                                        </td>
                                        <td>
                                            {{$lot->price}}
                                        </td>
                                        <td>
                                            {{$lot->port}}
                                        </td>
                                        <td>
                                            <img style="height: 75px" src="{{asset($lot->port_photo)}}">
                                        </td>
                                        <td>
                                            {{$lot->created_at}}
                                        </td>
                                        <td>
                                            {{$lot->updated_at}}
                                        </td>
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                        <td>
                                            {{--<a href="{{route('editLots',$lot->id)}}">+</a>--}}
                                            <a href="editLots?lot={{$lot->id}}">+</a>
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
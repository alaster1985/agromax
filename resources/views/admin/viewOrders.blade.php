@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>ORDERS</h1>
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
                                    <th>№</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>linkedIn</th>
                                    <th>Phone</th>
                                    {{--<th>Company</th>--}}
                                    <th>Product name</th>
                                    <th>Amount</th>
                                    <th>Price per ton</th>
                                    {{--<th>Port</th>--}}
                                    <th>Incoterms</th>
                                    <th>Exclusive</th>
                                    <th>Status</th>
                                    {{--<th>Stage</th>--}}
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Edit</th>
                                    @if(\App\User::find(Auth::id())->role_id === 3)
                                    @else
                                        <th>Delete</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr id="trId">
                                        <td>
                                            {{$order->id}}
                                        </td>
                                        <td>
                                            {{$order->first_name}}
                                        </td>
                                        <td>
                                            {{$order->last_name}}
                                        </td>
                                        <td>
                                            {{$order->email}}
                                        </td>
                                        <td>
                                            {{$order->linkedin}}
                                        </td>
                                        <td>
                                            {{$order->phone}}
                                        </td>
                                        {{--<td>--}}
                                            {{--{{$order->company}}--}}
                                        {{--</td>--}}
                                        <td>
                                            {{$order->product_name}}
                                        </td>
                                        <td>
                                            {{$order->tons}}
                                        </td>
                                        <td>
                                            {{$order->price}}
                                        </td>
                                        {{--<td>--}}
                                            {{--{{$order->port}}--}}
                                        {{--</td>--}}
                                        <td>
                                            {{\App\Delivery::find($order->delivery_id)->name}}
                                        </td>
                                        <td>
                                            {{$order->exclusive ? 'YES' : 'NO'}}
                                        </td>
                                        <td>
                                            {{\App\Status::find($order->status_id)->status}}
                                        </td>
                                        {{--<td>--}}
                                            {{--{{\App\Stage::find($order->stage_id)->stage}}--}}
                                        {{--</td>--}}
                                        <td>
                                            {{$order->created_at}}
                                        </td>
                                        <td>
                                            {{$order->updated_at}}
                                        </td>
                                        <td>
                                            {{--<a href="{{route('editOrders',$order->id)}}">+</a>--}}
                                            <a href="editOrders?order={{$order->id}}">+</a>
                                        </td>
                                        @if(\App\User::find(Auth::id())->role_id === 3)
                                        @else
                                            <td>
                                                {{ csrf_field()}}
                                                <a href="{{route('deleteOrder',$order->id)}}"
                                                   onclick="return confirm('Are you sure you want to delete this Order?');">-</a>
                                                {{ csrf_field()}}
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
        @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                {{ session()->get('message') }}
            </div>
        @endif
    </div><!-- main -->
</div>
@include('admin/layouts.footer')
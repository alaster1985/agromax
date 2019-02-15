@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>ORDER EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('updateOrder')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">PRODUCT INFO</h2>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Product name</label>
                                        <input class="input-style" disabled="true"
                                               name="product_name" value="{{$order->product_name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Amount</label>
                                        <input class="input-style" disabled="true"
                                               name="tons" value="{{$order->tons}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Price</label>
                                        <input class="input-style" disabled="true"
                                               name="price" value="{{$order->price}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Port</label>
                                        <input class="input-style" disabled="true"
                                               name="port" value="{{$order->port}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Incoterms</label>
                                        <input class="input-style" disabled="true"
                                               name="delivery"
                                               value="{{\App\Delivery::find($order->delivery_id)->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Exclusive</label>
                                        <input class="input-style" disabled="true"
                                               name="exclusive" value="{{$order->exclusive ? 'YES' : 'NO'}}"/>
                                    </div>
                                </div>
                                <h2 class="StepTitle">CLIENT INFO</h2>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">First name</label>
                                        <input class="input-style" disabled="true"
                                               name="first_name" value="{{$order->first_name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Last name</label>
                                        <input class="input-style" disabled="true"
                                               name="last_name" value="{{$order->last_name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Email</label>
                                        <input class="input-style" disabled="true"
                                               name="email" value="{{$order->email}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">LinkedIn</label>
                                        <input class="input-style" disabled="true"
                                               name="linkedin" value="{{$order->linkedin}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Phone</label>
                                        <input class="input-style" disabled="true"
                                               name="phone" value="{{$order->phone}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Company</label>
                                        <input class="input-style" disabled="true"
                                               name="company" value="{{$order->company}}"/>
                                    </div>
                                </div>
                                <h2 class="StepTitle">ORDER INFO</h2>
                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Status</label>
                                        <select name="status_id">
                                            @foreach(App\Status::all() as $status)
                                                <option id="{{$status->id}}"
                                                        value="{{$status->id}}">{{$status->status}}</option>
                                                @if($status->id === $order->status_id)
                                                    <script>document.getElementById("{{$status->id}}").selected = true</script>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Stage</label>--}}
                                        {{--<input class="input-style" disabled="true"--}}
                                               {{--name="stage" value="{{\App\Stage::find($order->stage_id)->stage}}"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled="true"
                                               name="created_at" value="{{$order->created_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled="true"
                                               name="updated_at" value="{{$order->updated_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <button type="submit" class="btn btn-success">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
</div>
@include('admin/layouts.footer')
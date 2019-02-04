@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>LOT EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{--{{Route('updateLot')}}--}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Product name</label>
                                        <input class="input-style" disabled="true"
                                               name="product_name" value="{{\App\Lot::find($lot->id)->product->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Amount</label>
                                        <input class="input-style" disabled="true"
                                               name="tons" value="{{$lot->tons}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Price</label>
                                        <input class="input-style" disabled="true"
                                               name="price" value="{{$lot->price}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Port</label>
                                        <input class="input-style" disabled="true"
                                               name="port" value="{{$lot->port}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Incoterms</label>
                                        <input class="input-style" disabled="true"
                                               name="delivery"
                                               value="{{\App\Delivery::find($lot->delivery_id)->name}}"/>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Port_photo</label>--}}
                                {{--<img style="height: 33%" src="{{asset($lot->port_photo)}}">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Port_photo</label>
                                        <input class="input-style" disabled="true"
                                               name="first_name" value="{{$lot->port_photo}}"/>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Special</label>--}}
                                {{--<input class="input-style" disabled="true"--}}
                                {{--name="last_name" value="{{$lot->special}}"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                @foreach(\App\Description::all()->where('product_id', '=', $lot->product_id) as $description)

                                    <div class="col-md-12">
                                        <div class="inline-form">
                                            <label class="c-label">Description
                                                for {{\App\Language::find($description->language_id)->name}}</label>
                                            <textarea rows="4" class="input-style" disabled="true"
                                                      name="linkedin" {{--value=""--}}>{{$description->description}}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                {{--<div class="col-md-4">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Phone</label>--}}
                                        {{--<input class="input-style" disabled="true"--}}
                                               {{--name="phone" value="--}}{{--{{$order->phone}}--}}{{--"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Company</label>--}}
                                        {{--<input class="input-style" disabled="true"--}}
                                               {{--name="company" value="--}}{{--{{$order->company}}--}}{{--"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<input type="hidden" name="order_id" value="--}}{{--{{$order->id}}--}}{{--">--}}
                                {{--<div class="col-md-3">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Status</label>--}}
                                {{--<select name="status_id">--}}
                                {{--@foreach(App\Status::all() as $status)--}}
                                {{--<option id="{{$status->id}}"--}}
                                {{--value="{{$status->id}}">{{$status->status}}</option>--}}
                                {{--@if($status->id === $order->status_id)--}}
                                {{--<script>document.getElementById("{{$status->id}}").selected = true</script>--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Stage</label>--}}
                                        {{--<input class="input-style" disabled="true"--}}
                                               {{--name="stage"--}}
                                               {{--value="--}}{{--{{\App\Stage::find($order->stage_id)->stage}}--}}{{--"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled="true"
                                               name="created_at" value="{{$lot->created_at ?? ''}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled="true"
                                               name="updated_at" value="{{$lot->updated_at ?? ''}}"/>
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
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
</div>
@include('admin/layouts.footer')
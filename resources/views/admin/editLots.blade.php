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
            <form action="{{Route('updateLot')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">LOT</h2>
                                <input type="hidden" name="lot_id" value="{{$lot->id}}">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Product name</label>
                                        <input class="input-style"
                                               name="product_name" value="{{\App\Lot::find($lot->id)->product->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Amount</label>
                                        <input class="input-style" name="tons" value="{{$lot->tons}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Price</label>
                                        <input class="input-style" name="price" value="{{$lot->price}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inline-form">
                                        <label class="c-label">Port</label>
                                        <input class="input-style" name="port" value="{{$lot->port}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inline-form">
                                        <label class="c-label">Incoterms</label>
                                        <select name="delivery_id">
                                            @foreach(\App\Delivery::all() as $delivery)
                                                <option id="{{$delivery->id}}"
                                                        value="{{$delivery->id}}">{{$delivery->name}}</option>
                                                @if($delivery->id === $lot->delivery_id)
                                                    <script>document.getElementById("{{$delivery->id}}").selected = true</script>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="inline-form">
                                        <label class="c-label">Current port photo</label>
                                        <img style="height: 75px" src="{{asset($lot->port_photo)}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">New port photo</label>
                                        <input class="input-style" name="port_photo" type="file"/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="inline-form">
                                        <label class="c-label">Current product photo</label>
                                        <img style="height: 75px" src="{{asset(\App\Lot::find($lot->id)->product->photo)}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">New product photo</label>
                                        <input class="input-style" name="new_product_photo" type="file"/>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Special</label>--}}
                                {{--<input class="input-style" disabled--}}
                                {{--name="special" value="{{$lot->special}}"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                @foreach(\App\Description::all()->where('product_id', '=', $lot->product_id) as $description)

                                    <div class="col-md-12">
                                        <div class="inline-form">
                                            <label class="c-label">Description
                                                for {{\App\Language::find($description->language_id)->name}}</label>
                                            <textarea rows="4" class="input-style"
                                                      name="description[{{$description->id}}]">{{$description->description}}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled
                                               name="created_at" value="{{$lot->created_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled
                                               name="updated_at" value="{{$lot->updated_at}}"/>
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
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
                                <h2 class="StepTitle">PRODUCT ID {{$lot->product_id}}</h2>
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <input type="hidden" name="lot_id" value="{{$lot->id}}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Product name</label>
                                            <input class="input-style"
                                                   name="product_name"
                                                   value="{{\App\Lot::find($lot->id)->product->name}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="inline-form">
                                            <label class="c-label">Amount</label>
                                            <input class="input-style" name="tons" value="{{$lot->tons}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="inline-form">
                                            <label class="c-label">Price per ton</label>
                                            <input class="input-style" name="price" value="{{$lot->price}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="inline-form">
                                            <label class="c-label">Hot offer</label>
                                            <select name="special">
                                                <option id="typical" value="0">Typical</option>
                                                <option id="hot" value="1">HOT</option>
                                                @if($lot->special === 1)
                                                    <script>document.getElementById('hot').selected = true</script>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Conditions</label>
                                            <select name="condition_id">
                                                @foreach(\App\Condition::all() as $condition)
                                                    <option id="cond{{$condition->id}}"
                                                            value="{{$condition->id}}">{{$condition->condition}}</option>
                                                    @if($condition->id === $lot->condition_id)
                                                        <script>document.getElementById("cond{{$condition->id}}").selected = true</script>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Port</label>
                                            <input class="input-style" name="port" value="{{$lot->port}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Cateory</label>
                                            <select name="category">
                                                @foreach(\App\Category::all()->where('id', '<>', 1) as $category)
                                                    <option id="cat{{$category->id}}"
                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                    @if($category->id === \App\Product::find($lot->product_id)->category_id)
                                                        <script>document.getElementById("cat{{$category->id}}").selected = true</script>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Incoterms</label>
                                            <select name="delivery_id">
                                                @foreach(\App\Delivery::all() as $delivery)
                                                    <option id="del{{$delivery->id}}"
                                                            value="{{$delivery->id}}">{{$delivery->name}}</option>
                                                    @if($delivery->id === $lot->delivery_id)
                                                        <script>document.getElementById("del{{$delivery->id}}").selected = true</script>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inline-form">
                                            <label class="c-label">Turkish</label>
                                            <select name="turkish">
                                                <option id="global" value="0">Global</option>
                                                <option id="turkish" value="1">Turkish</option>
                                                @if($lot->turkish === 1)
                                                    <script>document.getElementById('turkish').selected = true</script>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="inline-form">
                                            <label class="c-label">Current product photo</label>
                                            <img style="height: 75px"
                                                 src="{{asset(\App\Lot::find($lot->id)->product->photo)}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="inline-form">
                                            <label class="c-label">New product photo</label>
                                            <input class="input-style" name="new_product_photo" type="file"/>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Special</label>--}}
                                {{--<input class="input-style" disabled--}}
                                {{--name="special" value="{{$lot->special}}"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--@foreach(\App\Description::all()->where('product_id', '=', $lot->product_id) as $description)--}}

                                {{--<div class="col-md-12">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Description--}}
                                {{--for {{\App\Language::find($description->language_id)->name}}</label>--}}
                                {{--<textarea rows="4" class="input-style"--}}
                                {{--name="description_id[{{$description->language_id}}]">{{$description->description}}</textarea>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--@endforeach--}}

                                <div class="col-md-12">
                                    <div class="inline-form">
                                        <label class="c-label">Default Description</label>
                                        <textarea rows="4" class="input-style"
                                                  name="description">{{$lot->product->description}}</textarea>
                                    </div>
                                </div>

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
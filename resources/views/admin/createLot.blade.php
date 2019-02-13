@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CREATE LOT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('addLot')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">LOT</h2>
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Product name</label>
                                        <select name="productId">
                                            @foreach(\App\Product::all()->where('id', '<>', 1)->sortBy('name') as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                            <option value="new">New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Amount</label>
                                        <input class="input-style" value="{{old('tons')}}" name="tons"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Price per ton</label>
                                        <input class="input-style" value="{{old('price')}}" name="price"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Incoterms</label>
                                        <select name="delivery_id">
                                            @foreach(\App\Delivery::all() as $delivery)
                                                <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Port</label>
                                        <input class="input-style" value="{{old('port')}}" name="port"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Port_photo</label>
                                        <input class="input-style" name="port_photo" type="file"/>
                                    </div>
                                </div>
                                <div class="col-md-4 newProduct" style="display: none">
                                    <div class="inline-form">
                                        <label class="c-label">Category</label>
                                        <select name="category">
                                            @foreach(\App\Category::all()->where('id', '<>', 1)->sortBy('name') as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 newProduct" style="display: none">
                                    <div class="inline-form">
                                        <label class="c-label">New Product Name</label>
                                        <input class="input-style" value="{{old('newProductName')}}" name="newProductName"/>
                                    </div>
                                </div>

                                <div class="col-md-4 newProduct" style="display: none">
                                    <div class="inline-form">
                                        <label class="c-label">New Product Photo</label>
                                        <input class="input-style" name="new_product_photo" type="file"/>
                                    </div>
                                </div>

                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Special</label>--}}
                                {{--<select name="special">--}}
                                {{--<option value="0" selected>no</option>--}}
                                {{--<option value="1">yes</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--@foreach(\App\Language::all() as $language)--}}

                                    {{--<div class="col-md-12 newProduct" style="display: none">--}}
                                        {{--<div class="inline-form">--}}
                                            {{--<label class="c-label">Description for {{$language->name}}</label>--}}
                                            {{--<textarea rows="4" class="input-style"--}}
                                                      {{--name="description_id[{{$language->id}}]"--}}
                                                      {{--placeholder="Description for {{$language->name}}"--}}
                                            {{-->{{old('description_id.' . $language->id)}}</textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--@endforeach--}}

                                <div class="col-md-12 newProduct" style="display: none">
                                    <div class="inline-form">
                                        <label class="c-label">Default Description</label>
                                        <textarea rows="4" class="input-style"
                                                  name="description"
                                                  placeholder="Default Description"
                                        >{{old('description')}}</textarea>
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
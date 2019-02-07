@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CATEGORY EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('updateCategory')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">CATEGORY</h2>
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Category name</label>
                                        <input class="input-style" name="name" value="{{$category->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">New Photo</label>
                                        <input class="input-style" name="photo" type="file"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Current Photo</label>
                                        <img style="height: 75px" src="{{asset($category->photo)}}">
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                {{--<div class="inline-form">--}}
                                {{--<label class="c-label">Type</label>--}}
                                {{--<input class="input-style" --}}{{----}}{{--disabled--}}{{----}}{{----}}
                                {{--name="type" value="{{$category->type}}"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Type</label>
                                        <select name="type">
                                            <option id="lower" value="lower" selected>lower</option>
                                            <option id="upper" value="upper">upper</option>
                                            @if($category->type === 'upper')
                                                <script>document.getElementById('upper').selected = true</script>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled
                                               name="created_at" value="{{$category->created_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled
                                               name="updated_at" value="{{$category->updated_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <button type="submit" {{--disabled--}} class="btn btn-success">SAVE</button>
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
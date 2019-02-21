@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>SOCIAL EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('updateSocial')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <input type="hidden" name="social_id" value="{{$social->id}}">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Social</label>
                                        <input class="input-style" name="name" value="{{$social->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Contact</label>
                                        <input class="input-style" name="contact" value="{{$social->contact}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Social Disable</label>
                                        <select name="disable">
                                            <option id="yes" value="0" selected>NO</option>
                                            <option id="no" value="1">YES</option>
                                            @if($social->disable === 1)
                                                <script>document.getElementById('no').selected = true</script>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Created at</label>--}}
                                        {{--<input class="input-style" disabled--}}
                                               {{--name="created_at" value="{{$social->created_at}}"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Updated at</label>--}}
                                        {{--<input class="input-style" disabled--}}
                                               {{--name="updated_at" value="{{$social->updated_at}}"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
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
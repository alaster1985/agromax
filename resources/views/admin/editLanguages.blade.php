@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>LANGUAGE EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('updateLanguage')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                {{--<h2 class="StepTitle">CATEGORY ID {{$category->id}}</h2>--}}
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <input type="hidden" name="language_id" value="{{$language->id}}">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Language</label>
                                        <input class="input-style" name="name" value="{{$language->name}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Language code</label>
                                        <input class="input-style" disabled name="code" value="{{$language->code}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Language Disable</label>
                                        <select name="disable">
                                            <option id="yes" value="0" selected>NO</option>
                                            <option id="no" value="1">YES</option>
                                            @if($language->disable === 1)
                                                <script>document.getElementById('no').selected = true</script>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="inline-form">--}}
                                        {{--<label class="c-label">Language code_page</label>--}}
                                        {{--<input class="input-style" name="code_page" value="{{$language->code_page}}"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled
                                               name="created_at" value="{{$language->created_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled
                                               name="updated_at" value="{{$language->updated_at}}"/>
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
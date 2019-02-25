@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CHARITY POSTS EDIT</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('updateCharityPost')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">POST ID {{$charityPost->id}}</h2>
                                @if ($errors)
                                    <div class="error" style="display: block">{{($errors->first())}}</div>
                                @endif
                                <input type="hidden" name="post_id" value="{{$charityPost->id}}">
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Title</label>
                                        <input class="input-style" name="title" value="{{$charityPost->title}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">New Charity Post Photo</label>
                                        <input class="input-style" name="photo" type="file"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Charity Post Photo</label>
                                        <img style="height: 75px" src="{{asset($charityPost->photo)}}">
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
                                        <label class="c-label">Presentation Disable</label>
                                        <select name="disable">
                                            <option id="yes" value="0" selected>NO</option>
                                            <option id="no" value="1">YES</option>
                                            @if($charityPost->disable === 1)
                                                <script>document.getElementById('no').selected = true</script>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Created at</label>
                                        <input class="input-style" disabled
                                               name="created_at" value="{{$charityPost->created_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Updated at</label>
                                        <input class="input-style" disabled
                                               name="updated_at" value="{{$charityPost->updated_at}}"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="inline-form">
                                        <label class="c-label">Post Description</label>
                                        <textarea rows="4" class="input-style"
                                                  name="post">{{$charityPost->post}}</textarea>
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
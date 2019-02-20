@include('admin/layouts.header')
@include('admin/layouts.menu')

<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>CHANGE PASSWORD</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="masonary-grids">
                <div class="col-md-12">
                    <div class="widget-area">
                        <div class="wizard-form-h">
                            @if ($errors)
                                <div class="error col-sm-4 control-label" align="center"
                                     style="display: block">{{($errors->first())}}</div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success" align="center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form id="form-change-password" role="form" method="POST"
                                  action="{{route('updatePassword')}}"
                                  novalidate class="form-horizontal">
                                <div class="col-md-9">
                                    <label for="current-password" class="col-sm-4 control-label">Current
                                        password</label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="user" value="{{ $user }}">
                                            <input type="password" class="form-control" id="current_password"
                                                   name="current_password" placeholder="Current password">
                                        </div>
                                    </div>
                                    <label for="password" class="col-sm-4 control-label">New password</label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password"
                                                   name="password"
                                                   placeholder="New password">
                                        </div>
                                    </div>
                                    <label for="password_confirmation" class="col-sm-4 control-label">Confirm
                                        password</label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                   name="password_confirmation" placeholder="Confirm password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-6">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin/layouts.footer')
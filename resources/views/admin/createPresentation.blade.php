@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>ADD PRESENTATION</h1>
                        @if ($errors)
                            <div class="error" style="display: block">{{($errors->first())}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{Route('addPresentation')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="masonary-grids">
                    <div class="col-md-12">
                        <div class="widget-area">
                            <div class="wizard-form-h">
                                <h2 class="StepTitle">Presentation</h2>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Presentation name</label>
                                        <input class="input-style" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inline-form">
                                        <label class="c-label">Presentation PDF</label>
                                        <input class="input-style" name="pdf" accept="application/pdf" type="file"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
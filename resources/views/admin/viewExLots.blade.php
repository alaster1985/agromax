@include('admin/layouts.header')
@include('admin/layouts.menu')
<div class="content-sec">
    <div class="container">
        <div class="title-date-range">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-title">
                        <h1>EXCLUSIVE PROPOSAL</h1>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div><!-- title Date Range -->
        <div class="row">
            <div class="masonary-grids">
                <div class="col-md-12">
                    <div class="widget-area">
                        <div class="streaming-table">
                            <span id="found" class="label label-info"></span>
                            {{$allExLots->links()}}
                            <table id="stream_table" class='table table-striped table-bordered'>
                                <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Category</th>
                                    <th>Incoterms</th>
                                    <th>Conditions</th>
                                    <th>Amount</th>
                                    <th>Optional price</th>
                                    <th>Max price</th>
                                    <th>Port</th>
                                    <th>Created_at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allExLots as $lot)
                                    <tr id="trId">
                                        <td>
                                            {{$lot->product_name}}
                                        </td>
                                        <td>
                                            {{\App\Product::find($lot->product_id)->category->name}}
                                        </td>
                                        <td>
                                            {{\App\Delivery::find($lot->delivery_id)->name}}
                                        </td>
                                        <td>
                                            {{\App\Condition::find($lot->condition_id)->condition}}
                                        </td>
                                        <td>
                                            {{$lot->tons}}
                                        </td>
                                        <td>
                                            {{$lot->optional_price}}
                                        </td>
                                        <td>
                                            {{$lot->max_price}}
                                        </td>
                                        <td>
                                            {{$lot->port}}
                                        </td>
                                        <td>
                                            {{$lot->created_at}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Content Sec -->
        </div><!-- Page Container -->
    </div><!-- main -->
</div>

@include('admin/layouts.footer')
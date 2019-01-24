@include('layouts.header')
<main>
    <section class="offers container">
        <div class="row offers__list  col-sm-12">
            <h2 class="offers__title">Chickpea is our major proposal</h2>

            @foreach($lots as $lot)

                <div class="offers__item col-sm-4 col-md-3">
                    <a class="offer__img-wr" href="/confirmation">
                        <img src="{{asset($lot->photo)}}" alt="Our offers">
                    </a>
                    <h3 class="offers__title">{{$lot->name}}</h3>
                    <table class="offers__table">
                        <thead>
                        <tr>
                            <th>Incoterms</th>
                            <th>Amount</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$lot->delivery}}</td>
                            <td>{{$lot->tons}} tons</td>
                            <td>{{$lot->price}}$</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="offers__btn" href="/confirmation">Make order</a>
                </div>

            @endforeach

        </div>
    </section>
</main>
@include('layouts.footer')
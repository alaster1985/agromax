@include('layouts.header')
<main>
    <section class="container exclusive">
        <div class="row">
            <h2 class="exclusive__title visually-hidden">Exclusive order</h2>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img class="exclusive__img" src="images/port.jpg" alt="Exclusive order">
                <form method="post">
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Name</span>
                        <select class="exclusive__select-name" id="exclusive-name">
                            <option value="Beans">Barley</option>
                            <option value="Beans">Beans</option>
                            <option value="Chickpea">Chickpea</option>
                            <option value="Coriander">Coriander</option>
                            <option value="Linen(grain)">Linen(grain)</option>
                            <option value="Lupine">Lupine</option>
                            <option value="Mustard">Mustard</option>
                            <option value="Red & green lentils">Red & green lentils</option>
                            <option value="Millet">Millet</option>
                            <option value="Safflower (grain) ">Safflower (grain)</option>
                            <option value="Spelt">Spelt</option>
                            <option value="Sorghum">Sorghum</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="exclusive__item exclusive__item-other-name input-group" id="other-name">
                        <span class="exclusive__title input-group-addon">Other name</span>
                        <input class="form-control" name="other-name" placeholder="Other name" type="text" required>
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Incoterms</span>
                        <select class="exclusive__select-incoterms">
                            <option value="Sorghum">FOB</option>
                            <option value="Beans">CIF</option>
                            <option value="Mustard">CCP</option>
                        </select>
                    </div>

                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Amount</span>
                        <input class="form-control" name="amount" placeholder="Amount" type="text" required>
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Optional price</span>
                        <input class="form-control" name="optional-price" placeholder="Optional price" type="text"
                               required>
                    </div>
                    <div class="exclusive__item input-group">
                        <span class="exclusive__title input-group-addon">Max price</span>
                        <input class="form-control" name="max-price" placeholder="Max price" type="text" required>
                    </div>
                    <input class="exclusive__btn" type="submit" value="Make order">
                </form>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')
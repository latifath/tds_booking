<style>
    .msg{
        font-size: 36px;
    }

    @media only screen and (max-width: 991px){
        .booking-form form button{
            margin-top: 75px;

        }
        .booking-form form .select-option {
            margin-bottom: 50px;
        }

        .adulte-span {
            margin-top: 50px;
        }
    }
</style>

<div class="booking-area">
    <div class="col-md-8 offset-sm-2 booking-form">
        <form action="">
            <div class="booking-wrap d-flex py-4" style="padding: 0 100px 0; border-radius: 10px;
            box-shadow: 0px 8px 79px 0px rgb(0 0 0 / 8%); z-index: 5;">
                <div class="check-date mr-3">
                    <div class="boking-tittle">
                        <span> Où allez-vous ?:</span>
                    </div>
                    <div class="boking-location" style="border-block-color: #e9ca1d00">
                        <input class="location-input" id="date-in" type="text"/>
                        <i class=""></i>
                    </div>
                </div>
                <div class="check-date mr-3">
                    <div class="boking-tittle">
                        <span> Date d'arrivée:</span>
                    </div>
                    <div class="boking-datepicker" style="border-block-color: #e9ca1d00">
                        <input class="input-a" id="date-in" type="date" placeholder="10/12/2020"/>
                        <i class=""></i>
                    </div>
                </div>
                <div class="check-date mr-3">
                    <div class="boking-tittle">
                        <span>Date de départ:</span>
                    </div>
                    <div class="boking-datepicker">
                        <input class="input-a" id="date-out" type="date" placeholder="12/12/2020"/>
                        <i class="t"></i>
                    </div>
                </div>
                <div class="select-option mr-3 mb-4">
                    <div class="boking-tittle">
                        <span>Chambres:</span>
                    </div>
                    <div class="select-option">
                        <select name="select" id="room">
                            <option value="Suite">Suite</option>
                            <option value="Salle a manger">Salle a manger</option>
                            <option value="Chambre de luxe">Chambre de luxe</option>
                            <option value="Chambre classique">Chambre classique</option>
                            <option value="Chambre supérieur">Chambre supérieur</option>
                        </select>
                    </div>
                </div>
                <div class="select-optionx mr-3">
                        <div class="boking-tittle">
                            <span class="adulte-span">Adultes:</span>
                        </div>
                        <div class="select-option">
                            <select name="select" id="adult">
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select>
                        </div>
                </div>
                <div class="mr-3 ">
                    <button class="bk-btn mb-0 px-3" type="submit" style="background-color: #dca73a; color:white;">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>



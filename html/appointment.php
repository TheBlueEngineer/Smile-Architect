<!--************-->
<!--** HEADER **-->
<!--************-->
<?php 
    $title = "Smile Architect: Programare";
    $message = "Mai jos puteti completa datele !";
    include ('./header.php');
?>

<!--*********************-->
<!--** APPOINTMENT.PHP **-->
<!--*********************-->
<!--********************************************************************************************-->

        <!--*************************************-->
        <!--** INTRODUCTION TO CURRENT WEBSITE **-->
        <!--************************************************************************************-->
        <div class="tab">
            Programare
        </div>

        <div class="text-container">
            <div class="text-block text-block-appointment">
                <p class="appointment-heading">Cerere de programare</p>

                <div class="input-field">
                    <input class="input-field-input" id="last_name" type="text" class="validate">
                    <label class="input-field-placeholder" for="last_name">Prenumele</label>
                </div>

                <div class="input-field">
                    <input class="input-field-input" id="last_name" type="text" class="validate">
                    <label class="input-field-placeholder" for="last_name">Numele</label>
                </div>

                <div class="input-field">
                    <input class="input-field-input" id="email" type="email" class="validate">
                    <label class="input-field-placeholder" for="email">Adresa de e-mail</label>
                </div>

                <div class="input-field">
                    <input class="input-field-input" id="telephone" type="text" length="10" class="validate">
                    <label class="input-field-placeholder" for="telephone">Numarul de telefon</label>
                </div>

                <a class="appointment-submit waves-effect waves-light">Trimiteti cererea</a>
            </div>
        </div>
<!--************-->
<!--** FOOTER **-->
<!--************-->
<?php
    include './footer.php';
?>
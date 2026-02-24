<?php
$countBiglietti=1;
?>
<div class="container">
    <h2>Biglietti Acquistati</h2>
    <h4>Qui puoi visualizzare i biglietti che hai acquistato.</h4>
    <?php if($countBiglietti>0):?>
        <div class="justify-content-center d-flex mt-5">
            <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">N.Biglietto</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Stazione di Arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>8:00</td>
                        <td>Termini</td>
                        <td>14:00</td>
                        <td>Firenze - Santa Maria</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    <?php else: ?>  
        <h4 class="text-center mt-5">Nessun Biglietto Acquistato.
            <div class="mt-3">
                <a href="#" class="btn btn-primary"> clicca qui per acquistare un biglietto</a>
            </div>
        </h4>
     <?php endif;?>  
</div>
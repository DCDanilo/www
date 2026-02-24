<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <table class="table text-center w-50">
            <thead>
                <tr>
                    <th scope="col">Ecco la tua nuova Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $new_password; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex flex-column mt-5 align-items-center">
        <h4>Ti consigliamo di cambiarla al più presto dopo aver effettuato l'accesso</h4>
        <div class="mt-2">
            <a href='/accedi' class="btn btn-success">Accedi</a>
        </div>
    </div>
</div>
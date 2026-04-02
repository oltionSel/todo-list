<?php
include('../partials/header.php');
?>

<div class="container-fluid bg-body-tertiary align-content-center" style="height:88.3vh">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 rounded rounded-3">
                <p class="h1 text-primary mb-3">Shto Detyra</p>
                <form action="http://localhost/todo-list/public/store.php" method="post">

                    <!-- Emri i detyres -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="emri_detyres" name="emri_detyres"
                            placeholder="Shkruaj emrin e Detyres">
                    </div>

                    <!-- Data e fillimit  -->
                    <div class="mb-3">
                        <input type="date" class="form-control" id="data_fillimit" name="data_fillimit"
                            placeholder="Shkruaj daten e fillimit">
                    </div>

                    <!-- Data e mbarimit  -->
                    <div class="mb-3">
                        <input type="date" class="form-control" id="data_mbarimit" name="data_mbarimit"
                            placeholder="Shkruaj daten e mbarimit">
                    </div>

                    <!-- Statusi  -->
                    <div class="mb-3">
                         <!-- olti mtha bane koment SELECT -->
                    </div>


                    <div class="mb-3 w-100 d-flex justify-content-center align-content-center">
                        <button class="btn btn-outline-primary w-50" type="submit">Ruaj Të Dhënat</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

<?php
include('../partials/footer.php');
?>
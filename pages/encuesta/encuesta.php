<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4" style="width: 60%; height: 75%">
                <div class="d-flex justify-content-center ">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Bienvenido a la encuesta</h4>
                    <hr class="border border-danger border-1 opacity-50">
                    <p class="text-center h6">Hola, gracias por tomarte el tiempo de contestar esta breve encuesta,
                    a continuación, encontrara 3 campos de valoración los cuales son rapidez, interfaz y
                        accesibilidad. Por favor califica estos campos de 1 a 5 estrellas. </p>
                    <hr class="border border-danger border-1 opacity-50">

                    <form class="estrellas" action="index.php?p=encuesta/actions/ingresar" method="post">
                        <div class="h5 text-center">Rapidez</div>
                            <p class="clasificacion h4">
                                <input id="radio1-1" type="radio" name="estrellas1" value="5"><!--
                        --><label for="radio1-1">★</label><!--
                        --><input id="radio2-1" type="radio" name="estrellas1" value="4"><!--
                        --><label for="radio2-1">★</label><!--
                        --><input id="radio3-1" type="radio" name="estrellas1" value="3"><!--
                        --><label for="radio3-1">★</label><!--
                        --><input id="radio4-1" type="radio" name="estrellas1" value="2"><!--
                        --><label for="radio4-1">★</label><!--
                        --><input id="radio5-1" type="radio" name="estrellas1" value="1"><!--
                        --><label for="radio5-1">★</label>
                            </p>
                        
                            <div class="h5 text-center">Interfaz</div>
                            <p class="clasificacion h4">
                                <input id="radio1-2" type="radio" name="estrellas2" value="5"><!--
                        --><label for="radio1-2">★</label><!--
                        --><input id="radio2-2" type="radio" name="estrellas2" value="4"><!--
                        --><label for="radio2-2">★</label><!--
                        --><input id="radio3-2" type="radio" name="estrellas2" value="3"><!--
                        --><label for="radio3-2">★</label><!--
                        --><input id="radio4-2" type="radio" name="estrellas2" value="2"><!--
                        --><label for="radio4-2">★</label><!--
                        --><input id="radio5-2" type="radio" name="estrellas2" value="1"><!--
                        --><label for="radio5-2">★</label>
                            </p>
                        
                            <div class="h5 text-center">accesibilidad</div>
                            <p class="clasificacion h4">
                                <input id="radio1-3" type="radio" name="estrellas3" value="5"><!--
                        --><label for="radio1-3">★</label><!--
                        --><input id="radio2-3" type="radio" name="estrellas3" value="4"><!--
                        --><label for="radio2-3">★</label><!--
                        --><input id="radio3-3" type="radio" name="estrellas3" value="3"><!--
                        --><label for="radio3-3">★</label><!--
                        --><input id="radio4-3" type="radio" name="estrellas3" value="2"><!--
                        --><label for="radio4-3">★</label><!--
                        --><input id="radio5-3" type="radio" name="estrellas3" value="1"><!--
                        --><label for="radio5-3">★</label>
                            </p>
                        
                        <button type="submit" class="btn text-white rojo w-100 mt-2">Enviar Clasificación</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4 p-2" style="width: 80%; height: 95%">
                <div class="d-flex justify-content-center">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Encuesta COVID-19</h4>
                    <hr class="border border-danger border-1 opacity-50">
                    <p class="text-center h6">Hola, gracias por tomarte el tiempo de contestar esta breve encuesta,
                        a continuación, encontrara 3 campos de valoración los cuales son rapidez, interfaz y
                        accesibilidad. Por favor califica estos campos de 1 a 5 estrellas. </p>
                    <hr class="border border-danger border-1 opacity-50">
                    <form action="index.php?p=auth/actions/salud" method="post">

                        <div class="row ">
                            <div class="col-4">¿Ha tenido fiebre? </div>
                            <div class="col-7 text-end">

                                <div class="form-check d-inline">
                                    <input type="radio" name="fiebre" value="si" id="fiebre_si"
                                        class="form-check-input">
                                    <label for="fiebre_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="fiebre" value="no" id="fiebre_no"
                                        class="form-check-input">
                                    <label for="fiebre_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-3">
                            <div class="col-7">¿Ha estado en contacto con alguien COVID-19 positivo? </div>

                            <div class="col-4 text-end">
                                <div class="form-check d-inline">
                                    <input type="radio" name="contacto" value="si" id="contacto_si"
                                        class="form-check-input">
                                    <label for="contacto_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="contacto" value="no" id="contacto_no"
                                        class="form-check-input">
                                    <label for="contacto_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4"> ¿Le duelen los músculos? </div>


                            <div class="col-7 text-end">
                                <div class="form-check d-inline">
                                    <input type="radio" name="musculos" value="si" id="musculos_si"
                                        class="form-check-input">
                                    <label for="musculos_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="musculos" value="no" id="musculos_no"
                                        class="form-check-input">
                                    <label for="musculos_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4"> ¿Ha presentado fatiga? </div>

                            <div class="col-7 text-end">
                                <div class="form-check d-inline">
                                    <input type="radio" name="fatiga" value="si" id="fatiga_si"
                                        class="form-check-input">
                                    <label for="fatiga_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="fatiga" value="no" id="fatiga_no"
                                        class="form-check-input">
                                    <label for="fatiga_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-4"> ¿Ha tenido perdida del gusto? </div>
                            <div class="col-7 text-end">
                                <div class="form-check d-inline">
                                    <input type="radio" name="gusto" value="si" id="gusto_si" class="form-check-input">
                                    <label for="gusto_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="gusto" value="no" id="gusto_no" class="form-check-input">
                                    <label for="gusto_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-5">¿Ha sentido perdida en el apetito?</div>
                            <div class="col-6 text-end">
                                <div class="form-check d-inline ">
                                    <input type="radio" name="apetito" value="si" id="apetito_si"
                                        class="form-check-input">
                                    <label for="apetito_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="apetito" value="no" id="apetito_no"
                                        class="form-check-input">
                                    <label for="apetito_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-6">¿Ha experimentado disnea? (Dificultad respiratoria)</div>
                            <div class="col-5 text-end">
                                <div class="form-check d-inline">
                                    <input type="radio" name="disnea" value="si" id="disnea_si"
                                        class="form-check-input">
                                    <label for="disnea_si" class="form-check-label">Sí</label>
                                </div>

                                <div class="form-check d-inline">
                                    <input type="radio" name="disnea" value="no" id="disnea_no"
                                        class="form-check-input">
                                    <label for="disnea_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>


                        <input type="hidden" class="d-none" name="token" value="<?php if (isset($_GET['token'])) {
                            echo $_GET['token'];
                        } ?>">

                        <div class="d-flex justify-content-center">
                            <div class="btn mt-5 shadow-sm rojo w-75">
                                <input type="submit" value="Terminar registro" name="registro"
                                    class="btn rojo text-white fw-semibold w-100">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
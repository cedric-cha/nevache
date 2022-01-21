
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Champs obligatoire !</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Adresse mail *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Adresse email requis!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Adresse email invalide !</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Numéro de téléphone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Champs obligatoire !</div>
                            </div>
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Saisir votre message" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Champs obligatoire !</div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center text-white mb-3">
                                    <div class="fw-bolder">Message Envoyé !</div>
                                </div>
                            </div>
                            <div class="form-group mb-md-0">
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Erreur!</div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg text-uppercase disabled" id="submitButton" type="submit">Envoyer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                            <!-- Google Maps -->
                        <div class="col-md-6">
                            <!-- <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=abidjan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="2rem"></iframe>
                                    <a href="https://www.whatismyip-address.com"></a><br>
                                    <style>.mapouter{position:relative;text-align:right;height:400px;width:500px;}</style>
                                    <a href="https://www.embedgooglemap.net">google maps for free</a>
                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                                    </div>
                                </div>
                            </div> -->
                            <div class="map-responsive">
                                <!-- <iframe src="https://maps.google.com/maps?q=abidjan&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                                </iframe> -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180404.4117214368!2d6.475958374944702!3d45.048896100512785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4789f192efd7f8a5%3A0x42a991072bfb5a14!2s05100%20N%C3%A9vache%2C%20France!5e0!3m2!1sfr!2sci!4v1642523398136!5m2!1sfr!2sci" 
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

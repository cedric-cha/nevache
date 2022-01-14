
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
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center text-white mb-3">
                                    <div class="fw-bolder">Message Envoyé !</div>
                                </div>
                            </div>
                            <div class="form-group mb-md-0">
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
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
                                <iframe src="https://maps.google.com/maps?q=abidjan&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

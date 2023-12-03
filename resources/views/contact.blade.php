<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-warning">Regina's Portofolio</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">About me</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.html">Experience</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">Achievement</a></li>
                            <li class="nav-item"><a class="nav-link" href="academic.html">Academic</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Assignment</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-warning bg-gradient-warning-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm">
                                    <!-- Name input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Your name is required.</div>
                                    </div>
                                    <!-- Phone number input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <!-- Message input -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Your message is required.</div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button class="btn btn-warning btn-lg" id="submitButton" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <script>
                            document.getElementById("contactForm").addEventListener("submit", function (event) {
                                event.preventDefault();
                                var name = document.getElementById('name').value;
                                var phone = document.getElementById('phone').value;
                                var message = document.getElementById('message').value;

                                // Format the WhatsApp message
                                var whatsappMessage = "Hi, I'm " + name + ". My message is: " + message;


                                // Create the WhatsApp URL
                                var whatsappURL = "https://api.whatsapp.com/send?phone=+6285235855526&text=" + encodeURIComponent(whatsappMessage);

                                // Redirect to WhatsApp
                                window.open(whatsappURL, '_blank');
                            });
                        </script>
                    </div>
                </div>
            </section>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .contact-section {
            background-color: white;
            padding: 80px 0 60px 0;
        }

        .contact-title {
            font-size: 3.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 50px;
        }

        .form-control {
            background-color: #e9ecef;
            border: none;
            border-radius: 25px;
            padding: 15px 20px;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .form-control:focus {
            background-color: #e9ecef;
            border: none;
            box-shadow: 0 0 0 0.2rem rgba(52, 186, 191, 0.25);
        }

        .submit-btn {
            background-color: #34bbbf;
            border: none;
            border-radius: 25px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #2da8ac;
            transform: translateY(-2px);
        }

        .info-section {
            background-color: #34bbbf;
            padding: 60px 0;
            position: relative;
        }

        .info-card {
            background-color: white;
            border-radius: 10px;
            padding: 40px 20px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-icon {
            width: 80px;
            height: 80px;
            background-color: #34bbbf;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px auto;
            font-size: 2rem;
            color: white;
        }

        .info-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .contact-title {
                font-size: 2.5rem;
            }

            .contact-section {
                padding: 60px 0 40px 0;
            }

            .info-section {
                padding: 40px 0;
            }

            .info-card {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 576px) {
            .contact-title {
                font-size: 2rem;
            }

            .contact-subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="text-center">
                        <h1 class="contact-title">Contact Us</h1>
                        <p class="contact-subtitle">Any questions or remarks? Just write us a message!</p>
                    </div>

                    <form class="mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Enter a valid email address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter your Name" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h3 class="info-title">About Club</h3>
                        <p class="info-text">
                            Running Club<br>
                            Workouts
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="info-title">Phone (Landline)</h3>
                        <p class="info-text">
                            +912 3456 7890<br>
                            +912 3456 7890
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="info-title">Our Office Location</h3>
                        <p class="info-text">
                            The Interior Design Studio Company<br>
                            The Courtyard, 4 Evelyn Rd, London, W4 5JL
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const email = this.querySelector('input[type="email"]').value;
            const name = this.querySelector('input[type="text"]').value;

            if (email && name) {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Add smooth hover effects
        document.querySelectorAll('.info-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        
        section {
            margin: 20px auto;
            max-width: 900px;
            padding: 20px;
        }
        .welcome {
            text-align: center;
        }
        .services, .why-choose-us {
            margin: 30px 0;
        }
        .service-item, .why-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .service-item img, .why-item img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
        .cta {
            text-align: center;
            padding: 20px;
            background-color: #0047ab;
            color: white;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar Component -->
    <x-navbar/>

    <!-- Main Content -->
    <main>
        <!-- Welcome Section -->
        <section class="welcome">
            <h2>Welcome to Our Bank</h2>
            <p>At Global Trust Bank, we provide secure, reliable, and customer-focused banking solutions designed to meet your financial needs. Whether you're saving for the future, managing your business, or looking for expert financial advice, we are here to help.</p>
        </section>

        <!-- Featured Services -->
        <section class="services">
            <h2>Our Featured Services</h2>
            <div class="service-item">
                <img src="image/pb.png" alt="Personal Banking">
                <p><strong>Personal Banking</strong>: Manage your personal finances with our easy-to-use accounts, loans, and savings options.</p>
            </div>
            <div class="service-item">
                <img src="image/bb.jpg" alt="Business Banking">
                <p><strong>Business Banking</strong>: Get support for your business with tailored banking solutions and services.</p>
            </div>
            <div class="service-item">
                <img src="image/loan.jpeg" alt="Loans">
                <p><strong>Loans</strong>: Achieve your dreams with our flexible loan options, including home, auto, and personal loans.</p>
            </div>
            <div class="service-item">
                <img src="image/invest.png" alt="Investments">
                <p><strong>Investments</strong>: Grow your wealth with our expert investment services and advisory plans.</p>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="why-choose-us">
            <h2>Why Choose Us?</h2>
            <div class="why-item">
                <img src="image/trust.png" alt="Trust">
                <p><strong>Trusted by Millions</strong>: Over a million customers trust us for their financial needs.</p>
            </div>
            <div class="why-item">
                <img src="image/support.jpg" alt="Support">
                <p><strong>24/7 Support</strong>: Our dedicated customer support team is available anytime, anywhere.</p>
            </div>
            <div class="why-item">
                <img src="image/secure.png" alt="Security">
                <p><strong>Secure Banking</strong>: Advanced security measures to ensure your data and funds are safe.</p>
            </div>
        </section>

        <!-- Call-to-Action -->
        <div class="cta">
            <h3>Ready to Start Your Journey?</h3>
            <p>Open an account with us today and experience the difference!</p>
            <a href="/contact" style="color: white; text-decoration: underline;">Contact Us</a>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; {{ date('Y') }} Global Trust Bank. All rights reserved.</p>
    </footer>
</body>
</html>

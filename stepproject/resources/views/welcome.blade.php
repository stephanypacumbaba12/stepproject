@extends('main')
@section('title','WELCOME')



@section('content')



    <section class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="video/bg.mp4" type="video/mp4">
        </video>
    </section>

    

    <section class="featured-prod">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="images/1.png" alt="Product 1">
                <h3>Product 1</h3>
                <p>Step into style with our versatile range of athletic sneakers, 
                designed to enhance your performance while keeping you on-trend wherever you go.</p>
                <span class="price">₱999</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/2.png" alt="Product 2">
                <h3>Product 2</h3>
                <p>Elevate your wardrobe with our collection of premium leather loafers,
                crafted with meticulous attention to detail for a timeless blend of sophistication and comfort.</p>
                <span class="price">₱1500</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/3.png" alt="Product 3">
                <h3>Product 2</h3>
                <p>Find your perfect fit for any occasion with our curated selection of trendy sandals, 
                offering both fashion-forward designs and durable support for all-day wear.</p>
                <span class="price">₱2000</span>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <!-- Add more product items here -->
        </div>
    </div>
</section>
 
    

    <section class="benefits">
    <div class="container">
        <h2>Why Choose Us?</h2>
        <div class="benefits-list">
            <div class="benefit">
                <img src="images/1.png" alt="Free Shipping">
                <h3>Free Shipping</h3>
                <p>Enjoy free shipping on all orders.</p>
            </div>
            <div class="benefit">
                <img src="images/2.png" alt="Quality Assurance">
                <h3>Quality Assurance</h3>
                <p>We guarantee the quality of our products.</p>
            </div>
            <div class="benefit">
                <img src="images/3.png" alt="24/7 Support">
                <h3>Support</h3>
                <p>Our customer support team is available 24/7.</p>
            </div>
        </div>
    </div>
</section>
 

    <section class="testimonials">
    <div class="container">
        <h2>What Our Customers Say</h2>
        <div class="testimonial">
            <img src="images/customer1.jpg" alt="Customer 1">
            <blockquote>
                <p>"I love the quality of the shoes I bought from this website. They are comfortable and stylish. Highly recommended!"</p>
                <cite>John Doe</cite>
            </blockquote>
        </div>
        <div class="testimonial">
            <img src="images/customer2.jpg" alt="Customer 2">
            <blockquote>
                <p>"Great customer service and fast shipping. Will definitely purchase from here again!"</p>
                <cite>Jane Smith</cite>
            </blockquote>
        </div>
        <!-- Add more testimonials here -->
    </div>
</section>


    <section class="newsletter">
    <div class="container">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Get updates on new arrivals, promotions, and exclusive offers!</p>
        <form action="#" method="post" class="subscribe-form">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</section>
@endsection
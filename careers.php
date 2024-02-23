<?php
    include('header.php');
?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Careers</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Careers</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

   <!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>Professional</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Internship</h4>
                </a><!-- End tab nav item -->
        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>Professional Application</h3>
                        <p class="fst-italic">
                            Join Landasan Kapital (M) Sdn Bhd and become a valued part of our dedicated team! We prioritize creating a supportive work environment that encourages innovation and excellence. At ABC, we believe in continuous learning, providing opportunities for skill development and professional growth. If you're passionate and motivated, we invite you to be a part of our journey towards becoming a leading construction and engineering company. Let's build a successful future together!
                        </p>
                        
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <a href ="professionalApplicationForm.php" id="applicationFormBtn">Apply</a>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Internship Application</h3>
                        <p class="fst-italic">
                            At Landasan Kapital (M) Sdn Bhd, we believe in nurturing future leaders in the construction industry. Our Internship Programme provides undergraduates from local and international universities with a unique opportunity to gain practical insights into both business and technical aspects of construction. Through hands-on experience in our notable projects, interns develop their skills and apply theoretical knowledge in a real-world setting. We focus not only on technical skills but also on soft skills, ensuring interns emerge well-rounded and ready for the construction industry. Join us at Landasan Kapital (M) Sdn Bhd for a dynamic and enriching internship experience that empowers the next generation of construction leaders.
                        </p>
                        
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <a href ="intershipApplicationForm.php" id="applicationFormBtn">Apply</a>
            </div><!-- End tab content item -->
            
           

        </div>

    </div>
</section><!-- End Features Section -->

  </main><!-- End #main -->

<?php
    include('footer.php');
?> 
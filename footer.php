  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Landasan Kapital (M) Sdn Bhd</h3>
              <p>
                No.6 & 7 Blok A, Pusat Perniagaan The Atmosphere, Jalan Atmosphere 2, Off Jalan Putra Permai <br>
                43300 Seri Kembangan, Selangor<br><br>
                <strong>Phone:</strong> 03-8957 0891 / 1891<br>
                <strong>Email:</strong> landasankapital@yahoo.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="projects.php">Project</a></li>
              <li><a href="careers.php">Careers</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div><!-- End footer links column-->

          

          

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Landasan Kapital (M) Sdn Bhd</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var links = document.querySelectorAll('ul li a');

        links.forEach(function (link) {
            link.addEventListener('click', function () {
                links.forEach(function (innerLink) {
                    innerLink.classList.remove('active');
                });

                this.classList.add('active');
            });
        });
    });
    
function toggleText(element) {
        var shortText = element.querySelector('.short-text');
        var fullText = element.querySelector('.full-text');

        if (shortText.style.display === 'none') {
            shortText.style.display = 'inline';
            fullText.style.display = 'none';
        } else {
            shortText.style.display = 'none';
            fullText.style.display = 'inline';
        }
    }
</script>
</body>

</html>
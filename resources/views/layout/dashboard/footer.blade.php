<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Kontak Kami</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-dec">
                                <img src="{{ asset('template/dashboard') }}/images/contact-dec-v3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/place/KidsPark+Indramayu/@-6.3302368,108.3215421,17z/data=!4m14!1m7!3m6!1s0x2e6eb9003b51567f:0xd38db8e06972c5d0!2sKidsPark+Indramayu!8m2!3d-6.3302422!4d108.3261555!16s%2Fg%2F11lchbk_dn!3m5!1s0x2e6eb9003b51567f:0xd38db8e06972c5d0!8m2!3d-6.3302422!4d108.3261555!16s%2Fg%2F11lchbk_dn?entry=ttu"
                                    width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="fill-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="info-post">
                                            <div class="icon">
                                                <img src="{{ asset('template/dashboard') }}/images/email-icon.png" alt="">
                                                <a href="mailto:kidsparkindramayu@gmail.com">kidspark.indramayu</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-post">
                                            <div class="icon">
                                                <img src="{{ asset('template/dashboard') }}/images/location-icon.png" alt="">
                                                <a href="#">KidsPark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Hak Cipta © 2023 KidsPark Indramayu</p>
            </div>
        </div>
    </div>
</footer>

<!-- Skrip -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="{{ asset('template/dashboard') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('template/dashboard') }}/js/animation.js"></script>
<script src="{{ asset('template/dashboard') }}/js/imagesloaded.js"></script>
<script src="{{ asset('template/dashboard') }}/js/custom.js"></script>
@stack('script')
</body>

</html>

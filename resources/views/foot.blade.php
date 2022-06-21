<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/jquery/jquery-3.2.1.min.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/animsition/js/animsition.min.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/bootstrap/js/popper.js')}}></script>
<script src={{URL::asset('template/vendor/bootstrap/js/bootstrap.min.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/select2/select2.min.js')}}></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/daterangepicker/moment.min.js')}}></script>
<script src={{URL::asset('template/vendor/daterangepicker/daterangepicker.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/slick/slick.min.js')}}></script>
<script src={{URL::asset('template/js/slick-custom.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/parallax100/parallax100.js')}}></script>
<script>
    $('.parallax100').parallax100();
</script>

<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>

<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/isotope/isotope.pkgd.min.js')}}></script>
<!--===============================================================================================-->
<script src={{URL::asset('template/vendor/sweetalert/sweetalert.min.js')}}
></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src= {{URL::asset('template/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>


<!--===============================================================================================-->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlider");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<script src={{URL::asset('template/js/main.js')}}></script>
<script src={{URL::asset('template/js/public.js')}}></script>
<script src={{URL::asset('template/js/style.js')}}></script>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

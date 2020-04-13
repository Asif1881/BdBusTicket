<!DOCTYPE html>  <html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>   Search |   BdBusTicket  </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/images/logo/favicon.png" type="image/x-icon">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/bootstrap.min.css">

    <!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/plugins/owl.carousel.min.css">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/plugins/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/plugins/slick.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/font-awesome.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/plugins/animate.css">
    <link href="{{asset('/')}}assets/admin/css/toastr.min.css" rel="stylesheet"/>
    <link href="{{asset('/')}}assets/admin/css/sweetalert.css" rel="stylesheet">
    <!--Main Stylesheet-->
    <link rel="stylesheet"  href="{{asset('/')}}assets/front/css/styled19d.css?color=3842fb">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/homePageResponsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/jquery.autocomplete.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/homePageResponsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/jquery.autocomplete.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/front/css/seat-custom.css">
    <style>
        #contact-main {
            position: relative;
             padding-top: 0px;
        }
    </style>
</head>

<body class="body-class bc blog">
<!--Start Preloader-->
<div class="site-preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--End Preloader-->

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=205856110142667&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--Start Body Wrap-->
<div id="body-wrap">


@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.footer')



<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->
</div>
<!--End Body Wrap-->

<!--jQuery JS-->
<script src="{{asset('/')}}assets/front/js/jquery.2.1.2.min.js"></script>
<!--Bootstrap JS-->
<script src="{{asset('/')}}assets/front/js/bootstrap.min.js"></script>
<!--Counter JS-->
<script src="{{asset('/')}}assets/front/js/plugins/waypoints.js"></script>
<script src="{{asset('/')}}assets/front/js/plugins/jquery.counterup.min.js"></script>

<script src="{{asset('/')}}assets/admin/js/toastr.min.js"></script>
<script src="{{asset('/')}}assets/admin/js/sweetalert.js"></script>


<script src="{{asset('/')}}assets/front/js/jquery.autocomplete.js"></script>
<script src="{{asset('/')}}assets/admin/js/select2.min.js"></script>
<script src="{{asset('/')}}assets/front/js/flatpickr.js"></script>

<!--Owl Carousel JS-->
<script src="{{asset('/')}}assets/front/js/plugins/owl.carousel.min.js"></script>
<!--Venobox JS-->
<script src="{{asset('/')}}assets/front/js/plugins/venobox.min.js"></script>
<!--Slick Slider JS-->
<script src="{{asset('/')}}assets/front/js/plugins/slick.min.js"></script>
<!--Main-->
<script src="{{asset('/')}}assets/front/js/custom.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        $('.boarding_point').select2();


        /*
        *------------------------------------------------------
        * @function: findBookingInformation()
        * @return    : location, facilities, seatsList
        *------------------------------------------------------
        */
        var total_seat = $('input[name=total_seat]');
        var total_fare = $('input[name=total_fare]');
        var seat_number = $('input[name=seat_number]');

        var price = $('input[name=price]').val();
        var booking_date = $('input[name=booking_date]');

        var seatPreview = $('#seatPreview');
        var pricePreview = $('#pricePreview');
        var grandTotalPreview = $('#grandTotalPreview');
        var outputPreview = $('#outputPreview');

        if (total_seat.val() == '') {
            $("#submit-btn").attr('disabled', true);
        }

        /*
        *------------------------------------------------------
        * Choose seat(s)
        * @function: findPriceBySeat
        * @return  : selected seat(s), price and group price
        *------------------------------------------------------
        */

        $('body').on('click', '.ChooseSeat', function () {
            var seat = $(this);
            if (seat.attr('data-item') != "selected") {
                seat.removeClass('occupied').addClass('selected').attr('data-item', 'selected');
            } else if (seat.attr('data-item') == "selected") {
                seat.removeClass('selected').addClass('occupied').attr('data-item', '');
            }
            //reset seat serial for each click
            var seatSerial = "";
            var countSeats = 0;

            $("div[data-item=selected]").each(function (i, x) {
                countSeats = i + 1;
                seatSerial += $(this).text().trim() + ", ";
            });

            total_fare.val(countSeats * price);
            $("#grandTotalPreview").text((countSeats * price) + " TK");
            total_seat.val(countSeats);
            seat_number.val(seatSerial);
            seatPreview.html(seatSerial);

            if (countSeats > 0) {
                $("#submit-btn").attr('disabled', false);
            } else {
                $("#submit-btn").attr('disabled', true);
            }
        });


        $(document).on('click', "#submit-btn", function (e) {
            e.preventDefault();
            var boarding = $("input[name=boarding]").val();
            var trip_route_id = $("input[name=trip_route_id]").val();
            var fleet_registration_id = $("input[name=fleet_registration_id]").val();
            var trip_assign_id_no = $("input[name=trip_id_no]").val();
            var id_no = $("input[name=id_no]").val();
            var fleet_type_id = $("input[name=fleet_type_id]").val();
            var total_seat = $("input[name=total_seat]").val();
            var seat_number = $("input[name=seat_number]").val();
            var price = $("input[name=price]").val();
            var total_fare = $("input[name=total_fare]").val();
            var booking_date = $("input[name=booking_date]").val();

            $.ajax({
                type: "post",
                url: "https://ideal.thesoftking.com/bluebus/checked-seat",
                //contentType: false,
                //processData: false,
                data: {
                    boarding: boarding,
                    trip_route_id: trip_route_id,
                    fleet_registration_id: fleet_registration_id,
                    trip_assign_id_no: trip_assign_id_no,
                    id_no: id_no,
                    fleet_type_id: fleet_type_id,
                    total_seat: total_seat,
                    seat_number: seat_number,
                    price: price,
                    total_fare: total_fare,
                    booking_date: booking_date
                },

                success: function (data) {
                    console.log(data)
                    if (data.status == 1000) {
                        toastr.error(data.arr + " Seat Booked Yet. <br> Please select another seat");
                    }
                    if (data.pnr) {
                        window.location.href = "https://ideal.thesoftking.com/bluebus/seat-book/details" + '/' + data.pnr;
                    }
                },

                error: function (res) {
                    //console.log(res);
                }
            });

        });
    });

    $(document).ready(function () {
        var states = ["Location 1","Location 2"];
        $(function () {
            $("#fromAutoComplete").autocomplete({
                source: [states]
            });
        });
        $(function () {
            $("#toAutoComplete").autocomplete({
                source: [states]
            });
        });

        $("#datetimepicker2").flatpickr({
            minDate: "today",
            maxDate: new Date().fp_incr(50), // 14 days from now
            dateFormat: "d M Y",
        });


    });


</script>

<script>
    var type = "success";
    switch (type) {
        case 'info':
            toastr.info("All language file is not inputted in demo. Admin can add more language and input language text from admin panel.");
            break;
        case 'warning':
            toastr.warning("All language file is not inputted in demo. Admin can add more language and input language text from admin panel.");
            break;
        case 'success':
            toastr.success("All language file is not inputted in demo. Admin can add more language and input language text from admin panel.");
            break;
        case 'error':
            toastr.error("All language file is not inputted in demo. Admin can add more language and input language text from admin panel.");
            break;
    }
</script>
</body>
</html>

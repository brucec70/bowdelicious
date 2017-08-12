@extends('layout')

@section('dochead')
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(55.9300501, -4.3226081),
                mapTypeId: google.maps.MapTypeId.ROAD,
                scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var myLatLng = new google.maps.LatLng(55.9300501, -4.3226081);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection

@section('contents')
  <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>



                    <div class="box text-center">

                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h1>Contact</h1>

                                <p class="lead">Do you have any questions about our products and services or do you need something special custom made? </p>
                                <p>Please feel free to contact us. We're only too happy to help.</p>

                            </div>
                        </div>
                    </div>

                    <div class="box" id="contact">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>8 Oak Avenue
                                    <br>Bearsden
                                    <br>Glasgow
                                    <br>G61 3HD
                                    
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call Us</h3>
                                <p class="text-muted">Feel free to call us on number below. We'll get back to you as quick as we can.</p>
                                <p><strong>07886 306313</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> E-mail Us</h3>
                                <p class="text-muted">Please feel free to send us an email.</p>
                                <ul>
                                    <li><strong><a href="mailto:enquiries@bowdelicious.co.uk">enquiries@bowdelicious.co.uk</a></strong>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div id="map">

                        </div>

                        <hr>
                        <h2 class='text-center'>Contact form</h2>

                        <form method="post" action="/contact">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>
                    <!-- /#contact -->
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
@endsection


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/metisMenu.min.js"></script>
<!-- Scrollbar js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- animate js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/wow.min.js"></script>
<!-- Newstricker js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.newsTicker.js"></script>
<!--  classify JavaScript -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/classie.js"></script>
<!-- owl carousel js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/owl-carousel/owl.carousel.js"></script>
<!-- youtube js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/RYPP.js"></script>
<!-- jquery ui js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery-ui.js"></script>
<!-- form -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/form-classie.js"></script>
<!-- custom js -->
<script type="text/javascript" src="{{asset('/')}}frontend/assets/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}")
    </script>

@endif

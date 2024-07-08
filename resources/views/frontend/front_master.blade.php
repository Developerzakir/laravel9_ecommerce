<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>@yield('title') </title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/blue.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/rateit.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.css')}}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('frontend.inc.header')

<!-- ============================================== HEADER : END ============================================== -->
@yield('front')
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.inc.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{asset('frontend/assets/js/jquery-1.11.1.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/bootstrap-hover-dropdown.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/echo.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/jquery.easing-1.3.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/bootstrap-slider.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/jquery.rateit.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script> 
{{-- <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>  --}}
<script src="{{asset('frontend/assets/js/scripts.js')}}"></script>



<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
// Start Product View with Modal 
function productView(id){
    // alert(id)
    $.ajax({
        type: 'GET',
        url: '/product/view/modal/'+id,
        dataType:'json',
        success:function(data){
            // console.log(data)
            $('#pname').text(data.product.product_name_en);
            $('#price').text(data.product.selling_price);
            $('#pcode').text(data.product.product_code);
            $('#pcategory').text(data.product.category.category_name_en);
            $('#pbrand').text(data.product.brand.brand_name_en);
            $('#pimage').attr('src','/'+data.product.product_thumbnail);

            // Product Price 
            if (data.product.discount_price == null) {
                $('#pprice').text('');
                $('#oldprice').text('');
                $('#pprice').text(data.product.selling_price);
            }else{
                $('#pprice').text(data.product.discount_price);
                $('#oldprice').text(data.product.selling_price);
            } // end prodcut price 
            // Start Stock opiton
            if (data.product.product_qty > 0) {
                $('#aviable').text('');
                $('#stockout').text('');
                $('#aviable').text('aviable');
            }else{
                $('#aviable').text('');
                $('#stockout').text('');
                $('#stockout').text('stockout');
            } // end Stock Option 


            // Color
            $('select[name="color"]').empty();        
            $.each(data.color,function(key,value){
                $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
            }) // end color


            // Size
            $('select[name="size"]').empty();        
            $.each(data.size,function(key,value){
                $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
                if (data.size == "") {
                    $('#sizeArea').hide();
                }else{
                    $('#sizeArea').show();
                }
            }) // end size



        }
    })
 
}
</script>





</body>
</html>
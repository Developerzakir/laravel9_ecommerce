<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="csrf-token" content="{{ csrf_token() }}">
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

<script src="https://js.stripe.com/v3/"></script>
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


 {{-- toastr js --}}
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 {{-- sweetalert js --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;
 
     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;
 
     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;
 
     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break; 
  }
  @endif 
 </script>




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

            $('#product_id').val(id);
            $('#qty').val(1);

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

{{-- add to cart start --}}
<script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     // Start Add To Cart Product 
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data){
                miniCart()
                $('#closeModel').click();
                
                const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            
                            showConfirmButton: false,
                            timer: 3000 
                        })
                        if ($.isEmptyObject(data.error)) {
                                
                                Toast.fire({
                                type: 'success',
                                icon: 'success', 
                                title: data.success, 
                                })
    
                        }else{
                        
                    Toast.fire({
                                type: 'error',
                                icon: 'error', 
                                title: data.error, 
                                })
                            }
            }
        })
    }
</script>
{{-- End Add To Cart Product  --}}

{{-- mini cart start --}}
<script type="text/javascript">
   
     // Start Add To Cart Product 
    function miniCart(){
    
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/product/mini/cart",
           
            success:function(response){
                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
              var miniCart = ""

              $.each(response.carts, function(key,value){
                    miniCart += `<div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                      <div class="price">${value.price} * ${value.qty}</div>
                    </div>
                    <div class="col-xs-1 action"> 
                        <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button>
                    </div>
                  </div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>`
                });
                
                $('#miniCart').html(miniCart);

            }
        })
    }

    miniCart();

    /// mini cart remove Start 
    function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }
 //  end mini cart remove 
 
</script>
{{-- mini cart end   --}}


{{-- add wishlist start --}}
<script type="text/javascript">

function addToWishList(product_id){

    $.ajax({
            type: 'POST',
            url: '/add-to-wishlist/'+product_id,
            dataType:'json',
            success:function(data){

                 // Start Message 
                 const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
          
            }
        });
 

};


</script>
{{-- add wishlist end   --}}



<!-- /// Load Wishlist Data  -->


<script type="text/javascript">
    function wishlist(){
       $.ajax({
           type: 'GET',
           url: '/user/get-wishlist-product',
           dataType:'json',
         
           success:function(response){
               var rows = ""
               $.each(response, function(key,value){
                   rows += `<tr>
                        <td class="col-md-2"><img src="/${value.product.product_thumbnail} " alt="imga"></td>
                        <td class="col-md-7">
                            <div class="product-name"><a href="#">${value.product.product_name_en}</a></div>
                                
                            <div class="price">
                            ${value.product.discount_price == null
                                ? `${value.product.selling_price}`
                                :
                                `${value.product.discount_price} <span>${value.product.selling_price}</span>`
                            }
                                
                            </div>
                            </td>
                        <td class="col-md-2">
                                <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#myModal" id="${value.product_id}" onclick="productView(this.id)"> Add to Cart </button>

                        </td>

                    <td class="col-md-1 close-btn">
                        <button type="submit" class="" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="fa fa-times"></i></button>
                    </td>
                            </tr>`
           });
               
               $('#wishlist').html(rows);
           }
       })
    }
wishlist();

///  Wishlist remove Start 
function wishlistRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/wishlist-remove/'+id,
            dataType:'json',
            success:function(data){
            wishlist();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }
 // End Wishlist remove   
</script> 


{{-- load my cart product start --}}
<script type="text/javascript">
    function cart(){
       $.ajax({
           type: 'GET',
           url: '/user/get-cart-product',
           dataType:'json',
         
           success:function(response){
               var rows = ""
               $.each(response.carts, function(key,value){
                   rows += `<tr>
                        <td class="col-md-2"><img src="/${value.options.image} " alt="imga" style="width:60px; height:60px;"></td>
                        <td class="col-md-2">
                            <div class="product-name"><a href="#">${value.name}</a></div>
                                
                            <div class="price">
                              ${value.price}   
                            </div>
                            </td>

                            <td class="col-md-2">
                            <strong>${value.options.color} </strong> 
                            </td>

                             <td class="col-md-2">
                                    ${value.options.size == null
                                        ? `<span> .... </span>`
                                        :
                                    `<strong>${value.options.size} </strong>` 
                                    }           
                            </td>

                            <td class="col-md-2">
                               
                                
                                 ${value.qty > 1
            ? `<button type="submit" class="btn btn-danger btn-sm" id="${value.rowId}" onclick="cartDecrement(this.id)" >-</button> `
            : `<button type="submit" class="btn btn-danger btn-sm" disabled >-</button> `
            }

                                <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width:25px;" >  
                                <button type="submit" class="btn btn-success btn-sm" id="${value.rowId}" onclick="cartIncrement(this.id)" >+</button> 
                            </td>

                            <td class="col-md-2">
                            <strong>$${value.subtotal} </strong> 
                            </td>
                       

                    <td class="col-md-1 close-btn">
                         <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
                    </td>
                            </tr>`
           });
               
               $('#cartPage').html(rows);
           }
       })
    }
    cart();

///  cart remove Start 

///  Cart remove Start 
function cartRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
            couponCalculation();
            cart();
            miniCart();
            $('#couponField').show();
            $('#coupon_name').val('');
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }

 // End cart remove   

 // -------- CART INCREMENT --------//
 function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
 // ---------- END CART INCREMENT -----///

 // -------- CART Decrement  --------//
 function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
 // ---------- END CART Decrement -----///
</script> 

{{-- load my cart product end   --}}

{{-- =========== Coupon Apply Start =================  --}}
<script type="text/javascript">
  function applyCoupon(){
    var coupon_name = $('#coupon_name').val();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {coupon_name:coupon_name},
        url: "{{ url('/coupon-apply') }}",
        success:function(data){
            couponCalculation();
            
            if(data.validity == true){
                $('#couponField').hide();
            }

            // Start Message 
            const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
        }
    })
  };

  function couponCalculation(){
    $.ajax({
        type: 'GET',
        url: "{{ url('/coupon-calculation') }}",
        dataType: 'json',
        success:function(data){
            if(data.total){
                $("#couponCalField").html(
                    `<tr>
                        <th>
                            <div class="cart-sub-total">
                                Subtotal<span class="inner-left-md">$ ${data.total}</span>
                            </div>
                            <div class="cart-grand-total">
                                Grand Total<span class="inner-left-md">$ ${data.total}</span>
                            </div>
                        </th>
                    </tr>`
                )

            }else{
                $("#couponCalField").html(
                    `<tr>
                        <th>
                            <div class="cart-sub-total">
                                Subtotal<span class="inner-left-md">$ ${data.subtotal}</span>
                            </div>
                            <div class="cart-sub-total">
                                Coupon<span class="inner-left-md"> ${data.coupon_name}</span>
                                <button type="submit" onclick="couponRemove()"> <i class="fa fa-times"></i></button>
                            </div>
                            <div class="cart-sub-total">
                                Discount Amount<span class="inner-left-md">$ ${data.discount_amount}</span>
                            </div>
                            <div class="cart-grand-total">
                                Grand Total<span class="inner-left-md">$ ${data.total_amount}</span>
                            </div>
                        </th>
                    </tr>`
                )

            }
        }
    });
  }

  couponCalculation();

</script>

{{-- coupon remove start--}}
<script>
    function couponRemove(){

        $.ajax({
            type:'GET',
            url: "{{ url('/coupon-remove') }}",
            dataType: 'json',
            success:function(data){
                couponCalculation();
                $('#couponField').show();
                $('#coupon_name').val('');
                 // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
       
            }
        });

    }
</script>





</body>
</html>
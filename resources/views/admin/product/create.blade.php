@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-full">
      <!-- Content Header (Page header) -->
     	  

      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Add Product</h4>
          
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                  <form method="post" action="{{route('store.product')}}" enctype="multipart/form-data">
                    @csrf 

                    <div class="row">
                      <div class="col-12">		
                        
                        <div class="row"> <!-- first row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Brand Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="brand_id"  class="form-control">
                                            <option value="1" disabled selected>Select Brand</option>
                                            @foreach ($brands as $item) 
                                            <option value="{{$item->id}}">{{$item->brand_name_en}}</option>
                                            @endforeach
                                        </select>

                                        @error('brand_id')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror    
                                     </div>
                                </div>
                            </div>

                           
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id"  class="form-control">
                                            <option value="1" disabled selected>Select Category</option>
                                            @foreach ($categories as $item) 
                                            <option value="{{$item->id}}">{{$item->category_name_en}}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror    
                                     </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Sub Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="subcategory_id"  class="form-control">
                                            <option value="1" disabled selected>Select Sub Category</option>
                                           
                                        </select>

                                        @error('subcategory_id')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror    
                                     </div>
                                </div>
                            </div>
                        </div> <!-- first row end -->

                        <div class="row">  <!-- second row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Sub Sub Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="subsubcategory_id"  class="form-control">
                                            <option value="1" disabled selected>Select Sub Sub Category</option>
                                          
                                        </select>

                                        @error('subsubcategory_id')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror    
                                     </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Name English<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_name_en" class="form-control"> 

                                        @error('product_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Name Hindi<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_name_hin" class="form-control"> 

                                        @error('product_name_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        </div> <!-- second row end -->

                        <div class="row">  <!-- third row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Code<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_code" class="form-control"> 

                                        @error('product_code	')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Quantity<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_qty" class="form-control"> 

                                        @error('product_qty')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Tags English<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_tags_en" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_tags_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        </div> <!-- third row end -->

                        <div class="row">  <!-- 4th row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Tags Hindi<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_tags_hin" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_tags_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Size English<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_size_en" class="form-control" value="small,medium,large" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_size_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Size Hindi<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_size_hin" class="form-control" value="small,medium,large" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_size_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        </div> <!-- 4th row end -->

                        <div class="row">  <!-- 5th row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Color English<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_color_en" class="form-control" value="red,black,orange" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_color_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Color Hindi<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_color_hin" class="form-control" value="red,black,orange" data-role="tagsinput" placeholder="add tags"> 

                                        @error('product_color_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Selling Price <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="selling_price" class="form-control"> 

                                        @error('selling_price')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>
                        </div> <!-- 5th row end -->

                        <div class="row">  <!-- 6th row start -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Discount Price <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="discount_price" class="form-control"> 

                                        @error('discount_price')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Main Thumbnail <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="product_thumbnail" class="form-control" onchange="mainImg(this)"> 

                                        @error('product_thumbnail')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror 
                                        
                                        
                                        <img src="" alt="" id="showImage">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Multiple Image  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImage"> 

                                        @error('multi_img')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror  
                                        <div class="row" id="preview_img"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- 6th row end -->

                        <div class="row">  <!-- 7th row start -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Short Description English <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="short_desc_en" id="textarea" class="form-control"  placeholder="short description english"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Short Description Hindi <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="short_desc_hin" id="textarea" class="form-control"  placeholder="short description hindi"></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div> <!-- 7th row end -->

                        <div class="row">  <!-- 8th row start -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Long Description English <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="long_desc_en" id="editor1" class="form-control"  placeholder="short description english"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- 8th row end -->

                        <div class="row"> <!-- 9th row start -->
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Long Description Hindi <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="long_desc_hin" id="editor2" class="form-control"  placeholder="short description hindi"></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div> <!-- 9th row end -->

                        <div class="row"> <!-- 10th row START -->
                            <div class="col-md-4">
                                <div class="form-group">
                                
                                    <div class="controls">
                                        <input type="checkbox" id="checkbox_1" name="hot_deals"  value="single">
                                        <label for="checkbox_1">Hot Deals</label>
                                    </div>								
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                
                                    <div class="controls">
                                        <input type="checkbox" id="checkbox_2" name="featured"  value="single">
                                        <label for="checkbox_2">Featured</label>
                                    </div>								
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                            
                                    <div class="controls">
                                        <input type="checkbox" id="checkbox_3" name="special_offer"  value="single">
                                        <label for="checkbox_3">Special Offer</label>
                                    </div>								
                                </div>
                            </div>
                        </div>  <!-- 10th row END -->

                        <div class="row"> <!-- 11th row START -->
                            <div class="col-md-6">
                                <div class="form-group">
                                
                                    <div class="controls">
                                        <input type="checkbox" id="checkbox_4" name="special_deals"  value="single">
                                        <label for="checkbox_4">Special Deals</label>
                                    </div>								
                                </div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                
                                    <div class="controls">
                                        <input type="checkbox" id="checkbox_5" name="status"  value="single">
                                        <label for="checkbox_5">Status</label>
                                    </div>								
                                </div>
                            </div> --}}

                         
                        </div>  <!-- 11th row END -->
                       
                          
                       
                         
                      </div>
                    </div>
                     
                     
                      <div class="text-xs-right">
                          <input type="submit" class="btn btn-rounded btn-info mb-5" value="Add Product">
                      </div>
                  </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>


    {{--js code --}}

<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "{{url('/category/subcategory/ajax')}}/"+category_id,
                    type: 'GET',
                    dataType: 'json',
                    success:function(data){
                        $('select[name="subsubcategory_id"]').html('');
                        var d = $('select[name="subcategory_id"]').empty();
                        $.each(data, function(key,value){
                            $('select[name="subcategory_id"]').append('<option value="'+value.id+'">' + value.subcategory_name_en+ '</option>');
                        });
                    },
                });
            }else{
                alert('danger');
            }
        });


        // sub sub category get after select subcategory
        $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id){
                $.ajax({
                    url: "{{url('/category/sub-subcategory/ajax')}}/"+subcategory_id,
                    type: 'GET',
                    dataType: 'json',
                    success:function(data){
                        var d = $('select[name="subsubcategory_id"]').empty();
                        $.each(data, function(key,value){
                            $('select[name="subsubcategory_id"]').append('<option value="'+value.id+'">' + value.subsubcategory_name_en+ '</option>');
                        });
                    },
                });
            }else{
                alert('danger');
            }
        });
    
    });
    
    </script>
    
 {{-- preview product main image --}}
    <script type="text/javascript">
           function mainImg(input){   
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result).width(80).height(80);  
                }
                reader.readAsDataURL(input.files[0]);
            }
              
            }

    </script>

{{-- preview product multi image --}}

<script>
 
    $(document).ready(function(){
     $('#multiImage').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
             
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
             
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
     
    </script>
    
    
@endsection
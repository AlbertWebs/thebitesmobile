@extends('admin.master')

@section('content')
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Add Coupon </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/add_Coupon')}}" enctype="multipart/form-data">
                    
               

          
                  <div class="form-group">
                    <label class="control-label col-lg-4">Type</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="type" data-placeholder="Promo Type" class="form-control chzn-select" tabindex="2">
                              <option value="coupons">Coupon</option>
                              <option value="gifts">Gift</option>
                        </select>
                    </div>
                    </div>

                     <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">code</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="code" value="" placeholder="e.g FreeDelivery" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Value</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="price" value="" placeholder="e.g 1000" class="form-control" />
                        </div>
                    </div>

                   
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Coupon</button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
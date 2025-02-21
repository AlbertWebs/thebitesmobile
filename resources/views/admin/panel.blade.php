<?php
     $Updates = DB::table('updates')->where('status','0')->get();
 ?>
 @if($Updates->isEmpty())

 @else
 <center>
 @foreach($Updates as $update)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            <?php
                                $original_string = $update->content;
                                $num_words = 20;
                                $words = array();
                                $words = explode(" ", $original_string, $num_words);
                                $shown_string = "";


                                if(count($words) == 20){
                                  $words[19] = "...";
                                }

                                $shown_string = implode(" ", $words);

                ?>
                {!!html_entity_decode($shown_string)!!}

            <a href="{{url('/admin/update')}}/{{$update->id}}" class="alert-link">Read Update</a>.
        </div>
@endforeach


</center>
 @endif

 <center>
 @if(Session::has('message-comment'))
<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="alert alert-success">{{ Session::get('message-comment') }}</div>
</div>

@endif
</center>

<div style="text-align: center;">

                            <a class="quick-btn" href="{{url('/admin/products')}}">
                                <i class="icon-check icon-2x"></i>
                                <span> Menu</span>
                                <span class="label label-danger"><?php $Product = DB::table('product')->get(); $Count = count($Product); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/allMessages')}}">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label label-success"><?php $Messages = DB::table('messages')->get(); $Count = count($Messages); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/reviews')}}">
                                <i class="icon-comment icon-2x"></i>
                                <span>Reviews</span>
                                <span class="label label-info"><?php $Comments = DB::table('reviews')->where('status','0')->get(); $Count = count($Comments); echo $Count ?></span>
                            </a>

                            <a class="quick-btn" href="{{url('/admin/coupons')}}">
                                <i class="icon-smile icon-2x"></i>
                                <span>Coupons</span>
                                <span class="label label-danger"><?php $Comments = DB::table('reviews')->where('status','0')->get(); $Count = count($Comments); echo $Count ?></span>
                            </a>

                            <!-- <a class="quick-btn" href="{{url('/admin/services')}}">
                                <i class="icon-wrench icon-2x"></i>
                                <span>Services</span>
                                <span class="label label-warning"><?php $Services = DB::table('services')->get(); $Count = count($Services); echo $Count ?></span>
                            </a> -->

                            <!-- <a class="quick-btn" href="{{url('/admin/portfolio')}}">
                                <i class="icon-suitcase icon-2x"></i>
                                <span>Portfolio</span>
                                <span class="label btn-metis-2"><?php $Portfolio = DB::table('portfolio')->get(); $Count = count($Portfolio); echo $Count ?></span>
                            </a> -->

                            <a class="quick-btn" href="{{url('/admin/users')}}">
                                <i class="icon-user icon-2x"></i>
                                <span>Clients</span>
                                <span class="label label-default"><?php $Admins = DB::table('users')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>
                            <a class="quick-btn" href="{{url('/admin/admins')}}">
                                <i class="icon-user-md icon-2x"></i>
                                <span>Admins</span>
                                <span class="label label-danger"><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>



                        </div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    //$idValue = $_GET['id'];
    //echo $idValue;

    //print_r($data);    

    $booking_id = $data['booking_id'];
    
    //print_r($booking_id);
    
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Raghukaka </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">   
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" media="all">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main_contact.css">        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui-1.10.3.custom.min.css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">    
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">  
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-1to10.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-horizontal.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-movie.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-pill.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-reversed.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bars-square.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/bootstrap-stars.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/css-stars.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/fontawesome-stars-o.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/barrating/fontawesome-stars.css"> 
        
        <style>
            .dropdown-menu {
                    min-width: 900px;
                    z-index:10;
            }
            
            .dropdown-menu.columns-2 {
                    min-width: 400px;
            }
            
            .dropdown-menu.columns-3 {
                    min-width: 800px;
            }
            
            .dropdown-menu li  {
                    padding-top: 5px;
                    padding-bottom: 5px;
                    padding-left: 5px;
                    font-weight: 300;
                    margin-left: 5px;
            }
            
            .multi-column-dropdown {
                    list-style: none;
                    margin: 0px;
                    padding: 0px;
            }
            
            .multi-column-dropdown li{
                    display: block;
                    clear: both;
                    line-height: 1.428571429;
                    color: #333;
                    white-space: normal;
            }
            
            .multi-column-dropdown li:hover {
                    text-decoration: none;
                    color: #262626;
                    background-color: #999;
            }
            
            .listRight {
                left: auto !important;
                right: 0 !important;
            }
            
            .limheight {
                height: 600px; /*your fixed height*/
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3; /*3 in those rules is just placeholder -- can be anything*/
                        
                -webkit-column-width: 140px; /* Chrome, Safari, Opera */
                -moz-column-width: 140px; /* Firefox */
                column-width: 140px;    
                
                -webkit-column-rule: 1px solid lightblue; /* Chrome, Safari, Opera */
                -moz-column-rule: 1px solid lightblue; /* Firefox */
                column-rule: 1px solid lightblue;
            }
            
            .limheight li {
                display: inline-block; /*necessary*/
                width: 100%;
                vertical-align: middle;
                font-size: 14px;
                line-height: 14px;
            }
            
            .limheight p{
                font-size: 18px;
            }
            
            .category-dropdown a:hover{
                background-color: white;
            }
            
            .category-dropdown a:active{
                background-color: white;
            }
            
            .category-dropdown a:focus{
                background-color: white;
            }
            
            @media (max-width: 767px) {
                .dropdown-menu.multi-column {
                        min-width: 240px !important;
                        overflow-x: hidden;
                }
                
                .dropdown-menu {
                    min-width: 100px;
                    z-index:10;
                }
                
                .limheight{
                    height: auto;
                    -webkit-column-count: 1;
                    -moz-column-count: 1;
                    column-count: 1; /*3 in those rules is just placeholder -- can be anything*/
                    -webkit-column-width: 120px; /* Chrome, Safari, Opera */
                    -moz-column-width: 120px; /* Firefox */
                    column-width: 120px;    
                }
            }
            
            .form-group{
                margin-top: 5px;
                margin-bottom: 5px;
            }
            
        </style>
    </head>
    
    <body>        
        <div style="width: 100%; height: 12%;position: relative;">                
            <a href="http://www.raghukaka.com"><img src="<?php echo base_url(); ?>images/rk_logo.png" class="img-responsive main-logo" style="margin: 10px 10px;"/></a>
            <h3 class="pull-right font-myriadpro-light text-bold" style="margin: 25px 25px;">Call Us On : 022 - 33488888</h3>
        </div>       
        
        <section>      
            <div class="mb-20 main-container" style="">
            <div class="home-bg-lead" style="width: 100%;height: 100%; position: absolute;z-index: -2;"></div>
            <div style="width: 100%;height: 100%; position: absolute; background-color: rgba(0,0,0,0.4);z-index: -1;"></div> 
            <div class="container mt-40" style="z-index: 2; ">
              <div class="row">
                
                <div class="col-md-5 left-content mb-20" style="">
                <h2 class="title text-uppercase font-myriadpro-light text-bold white">Welcome to Raghukaka</h2>
                <h4 class="title font-myriadpro-light white" style="margin-top: 5px;">Your one stop destination for all home services</h4>
                <p class="mt-30 font-myriadpro-light" style="">Complete home cleaning I Kitchen Cleaning <br>
                                                        Washroom Cleaning I Electrician <br>
                                                        Plumber I Carpenter I AC Servicing <br>
                                                        Pest Control I Fitness I Yoga <br>
                                                        Car Cleaning I Sofa SPA  <br>                                                         
                                                        Zumba I Health I Hobbies <br>
                                                        SPA at Home & over 70 more "branded" services.</p>
                <!--p class="mt-10 font-myriadpro-light">Got kind of tired packin' and unpackin' - town to town and up and down the dial. Movin' on up to the east side. We finally got a piece of the pie.</p-->
                </div>
                <div class=" col-md-4 leave-comment font-myriadpro-light" style="">
                <div class="callout callout-danger-1 mb-10" style="display:none;font-size: 24px;color:red;"><h4></h4><p></p></div>
                <div class="callout callout-info-1 mb-10" style="display:none;font-size: 24px;color:greenyellow;"><h4></h4><p></p></div>
                <form id="main-contact-form" name="contact-form" method="post" action="#" onsubmit="return ValidateContact(this);">
                    <input type="hidden" value="<?php echo $booking_id;?>" name="booking_id"/>
                    <div class="row">
                        <div class="col-md-12 font-myriadpro-light ">
                            <h2 style="color: white;text-align: center;text-decoration: underline;">Order Feedback</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 font-myriadpro-light mt-20 form-group">
                            <label style="color: white;font-size: 20px;" class="mb-10">Rate quality of service delivered</label>
                            <select id="example" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-md-12 font-myriadpro-light form-group">
                            <label style="color: white;font-size: 20px;" class="mb-10">Was our pro <b><u>on Time</u></b></label>
                            <div id="ontime">
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="ontime" value="1" style="vertical-align:top;margin-top: 0px;"><b>Yes</b></label>
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="ontime" value="0" style="vertical-align:top;margin-top: 0px;"><b>No</b></label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-md-12 font-myriadpro-light form-group">
                            <label style="color: white;font-size: 20px;" class="mb-10">Was our pro <b><u>Well behaved &amp; Professional</u></b></label>
                            <div id="wellbehaved">
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="wellbehaved" value="1" style="vertical-align:top;margin-top: 0px;"><b>Yes</b></label>
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="wellbehaved" value="0" style="vertical-align:top;margin-top: 0px;"><b>No</b></label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-md-12 font-myriadpro-light form-group">
                            <label style="color: white;font-size: 20px;" class="mb-10">Did our pro has a valid <b><u>Identification Card(ID)</u></b></label>
                            <div id="validid">
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="validid" value="1" style="vertical-align:top;margin-top: 0px;"><b>Yes</b></label>
                                <label class="radio-inline" style="vertical-align: middle;font-size: 16px;color: white;"><input type="radio" name="validid" value="0" style="vertical-align:top;margin-top: 0px;"><b>No</b></label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12 font-myriadpro-light mt-20">
                          <div class="">
                            <input type="text" name="comment" class="form-control" placeholder="Comment (Optional)" id="comment">
                          </div>
                      </div>
                    </div>
                    
                    <!--div class="row">
                      <div class="col-md-12 font-myriadpro-light ">
                          <div class="form-group">
                            <input type="text" name="fullname" class="form-control" placeholder="Full Name" id="fullname">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 font-myriadpro-light ">
                          <div class="form-group">
                            <input type="text" name="mobile_number" class="form-control" placeholder="Contact No." id="mobile_number">
                          </div>
                      </div>
                    </div>
                    <div class="row">    
                      <div class="col-md-12 font-myriadpro-light ">
                          <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="e-mail Address" id="email_address">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 font-myriadpro-light ">
                          <div class="form-group">
                            <input type="text" name="time" class="form-control" placeholder="Preferred Time of Call" id="time">
                          </div>
                      </div>
                    </div-->
                    <!--div class="row">
                        <div class="col-md-12 font-myriadpro-light ">
                            <div class="form-group">
                                <textarea rows="2" name="description" id="message" class="form-control col-md-6 font-myriadpro-light pull-right" placeholder="What service are you looking for?"></textarea>                    
                            </div>
                        </div>
                    </div-->
                    
                    <!--div class="row">
                        <div class="col-md-12 category-dropdown font-myriadpro-light">
                            <div class="form-group">
                                <a href="#" class="dropdown-toggle btn text-size-large" data-toggle="dropdown" style="border: 1px solid #fff;">Select Services <b class="caret"></b></a>
                                <ul id = "limheight" class="limheight dropdown-menu listRight">
                                    <?php for($i = 0 ; $i < sizeof($groupArray); $i++){?>
                                        <p class="text-bold" style="padding-left: 5px;"><?php echo $groupArray[$i]['service_group_name'];?></p>
                                        <?php for($j = 0; $j < sizeof($categoryArray[$i]); $j++){?>
                                        <li style="height: 24px;"><input type="checkbox" name="categories" id="categories" value="<?PHP echo $categoryArray[$i][$j]['id']; ?>"> <label style="width: 80%;"><?php echo $categoryArray[$i][$j]['name'];?></label></li>
                                        <?php }?>
                                    <?php }?>                                 
                                </ul>      
                            </div>
                        </div>
                    </div-->
                    
                    <div class="row">
                        <div class="col-md-12 mt-20">
                            <!--a href="javascript:void(0);" onclick="ValidateContact(document.getElementById('main-contact-form'));" class="btn btn-orange-t text-uppercase display-block fz-12 ls-2 font-myriadpro-light btn-contact-submit">Send</a-->
                            <button class="btn btn-orange-t text-uppercase display-block fz-12 ls-2 font-myriadpro-light btn-contact-submit" type="submit" style="font-family: 'MyriadPro-Light';width: 100%;" onclick="ValidateContact(document.getElementById('main-contact-form'));" value="Send" >Submit </button>
                        </div>
                    </div>                   
                    
                  </form>
              </div>
            </div>
          </div>       
         </div> 
        </section>
        
        <section>
            <div class="container" style="height: 100%;position: relative;margin-top: 0px;">
                <div class="">
                <div class="row"  style="margin-top: 20px; margin-bottom: 30px;">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="subscribe">
                            <h3 class="font-myriadpro-light"> Get the best deals on Home Services.</h3>
                            <h6> Join thousands who subscribe to our Offer Zone. </h6>
                            <div class="subscribe_form">
                                <form role="form" name="myForm" id="myForm" onsubmit="return validateOfferPromotion(this);" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email"  name="email" placeholder="Email Address" >
                                    </div>
                                    <div class="section_sub_btn">
                                        <button class="btn btn-default font-myriadpro-light" type="submit" style="font-family: 'MyriadPro-Light';">  Subscribe </button>	
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="workng_img">
                            <img src="<?php echo base_url(); ?>images/rk_contact_img.png" alt="image">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="subscribe">
                            <h3 class="font-myriadpro-light"> Download App Now </h3>
                            <h6> Select your device platform and get download started </h6>
                            <div class="app-link"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.kaaryanext.raghukaka&hl=en"><img src="<?php echo base_url(); ?>images/icon_google_play.png" style="width: 40%;float: left;margin-right: 10px;"></a><a target="_blank" href="https://itunes.apple.com/in/app/home-services-raghukaka/id1078018826?mt=8"><img src="<?php echo base_url(); ?>images/icon_app_store_new.png" style="width: 40%;float: left; margin-right: 10px;"></a></div>
                            
                            <div class="subscribe_form mt-40">
                                <form role="form" name="myForm" id="myForm" onsubmit="return validateAppLink(this);" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="share_mobile_no" id="share_mobile_no" placeholder="Enter Your Mobile Number" aria-describedby="basic-addon2">
                                    </div>
                                    <div class="section_sub_btn">
                                        <button class="btn btn-default font-myriadpro-light" type="submit" style="font-family: 'MyriadPro-Light';">  Get App </button>	
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
        </div>            
        </section>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
       
        <script src="<?php echo base_url(); ?>js/barrating/jquery.barrating.min.js"></script>
        <script type="text/javascript">
            $(function() {
               $('#example').barrating({
                 theme: 'fontawesome-stars-o'
               });
            });
            
            $('#example').on('change', function() {
                //alert( $(this).find(":selected").val() );
                console.log("Rating selected : "+$(this).find(":selected").val());
                rating = $(this).find(":selected").val();
            });
         </script>
         
        <script src="<?php echo base_url(); ?>js/raghukaka.js"></script>
        <script>
            
             $('.dropdown-menu input, .dropdown-menu label,.dropdown-menu ').click(function(e) {
                e.stopPropagation();
             });
             
             $("#main-contact-form").submit(function(e) {
                e.preventDefault();
            });
             
            var ontime='',wellbehaved='',validid='',rating;
            
            function ValidateContact(ele) {
            
            //e.preventDefault();
            
            //var base_url = "http://localhost/RaghukakaNEW/";
            var base_url = "https://www.raghukaka.com/";           
            
            var hasError = 0;
            
            console.log("Ontime : "+ontime+" Well behaved : "+wellbehaved);
            
            if (ontime == '' || ontime == 'undefined') {
                showError("Please select yes or no.", "ontime");
                hasError = 1;
            } else {
                changeError("ontime");
            }
            
            if (wellbehaved == '' || wellbehaved == 'undefined') {
                showError("Please select yes or no.", "wellbehaved");
                hasError = 1;
            } else {
                changeError("wellbehaved");
            }
            
            if (validid == '' || validid == 'undefined') {
                showError("Please select yes or no.", "validid");
                hasError = 1;
            } else {
                changeError("validid");
            }           
            
            if(rating == '' || rating == '0'){
                showError("Please give rating.", "example");
                hasError = 1;
            } else {
                changeError("example");
            }  

            if (hasError == 1) {
                return false;
            } else {
                var contactData = jQuery(ele).serializeFormJSON();
                var q = JSON.stringify(contactData);
                console.log(q);

                jQuery.ajax({
                    dataType: 'json',
                    type: "POST",
                    url: base_url + "home/addFeedbackOfOrder",
                    data: {'jsonObj': q},
                    cache: false,
                    beforeSend: function() {
                        //alert("Json form Data : "+q);
                        console.log("Form Data before sending : "+q);
                        jQuery(".btn-contact-submit").prop('disabled', true).html('Sending...');
                    },
                    success: function(res) {
                        //alert("On Response : "+res.size);
                        jQuery(".btn-contact-submit").prop('disabled', false).val('Submit');
                        if (typeof (res.success) != "undefined" && res.success == '1') {
                            jQuery('.callout-info-1').css('display', 'block').find('h4').html(res.msg);
                            jQuery('.callout-danger-1').css('display', 'none');
                            document.getElementById('main-contact-form').reset();
                            setTimeout(function() {
                                jQuery('.callout-info-1').css('display', 'none');
                                location.reload();
                            }, 3000);
                        } else {
                            jQuery('.callout-info-1').css('display', 'none');
                            jQuery('.callout-danger-1').css('display', 'block').find('h4').html(res.msg);
                            setTimeout(function() {
                                jQuery('.callout-danger-1').css('display', 'none');
                            }, 5000);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) { 
                        //alert(textStatus + " " + errorThrown+" "+jqXHR.responseText);
                        console.log(jqXHR);    
                    }
                });
            }
            return false;
        }
        
        $('input[type=radio][name=ontime]').on('change', function() {
            ontime = $(this).val();
        });
        
        $('input[type=radio][name=wellbehaved]').on('change', function() {
            wellbehaved = $(this).val();
        });
        
        $('input[type=radio][name=validid]').on('change', function() {
            validid = $(this).val();
        });
        
        </script>
    </body>
    
</html>


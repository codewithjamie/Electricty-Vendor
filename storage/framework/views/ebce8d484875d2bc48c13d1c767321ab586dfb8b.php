<!DOCTYPE html>
<html lang="en">

<head>
  <base>
  </base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Buypowernow Platform for quick purchase of Airtime, Internet Data Bundles, DSTV, GOTV, PHCN and payment for other services in Nigeria">
  <meta name="keywords" content="Buy airtime online, buy MTN airtime, buy internet data subscription, Etisalat Glo Airtel Airtime, DSTV payment,GOTV payment,PHCN payment">
  <title><?php echo $__env->yieldContent('page_title'); ?></title>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Bootstrap -->
  <link rel='shortcut icon' href='/resources/frontend2/images/fav.png' type='image/x-icon' />
  <link href="/resources/frontend2/css/bootstrap.min.css" rel="stylesheet">
  <link href="/resources/frontend2/css/custom.css" rel="stylesheet">
  <link href="/assets/lib/select2/select2.min.css" rel="stylesheet">

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <style type="text/css">
    .evi-support {
      font-size: 22px !important;
      padding: 10px;
      font-weight: bold;
    }

    .need-help {
      text-align: right;
    }

    .evi-support .btn {
      background-color: #fafcfd;
    }

    @media  only screen and (max-width: 768px) {
      .evi-support {
        font-size: 12px !important;
        padding: 5px;
      }

      .need-help,
      .helps {
        text-align: center;
      }

      .evi-support .btn {
        padding: 3px !important;
      }
    }
  </style>
  <div class="container-fluid" style="background-color:white;">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div style="color:red;" class="evi-support need-help">
          Need Help or Enquiries?
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div style="color:red;" class="evi-support helps">
          <a href="/contact" class="btn btn-default">
            <img src="/ticket.png" height="25"> Submit a ticket
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php echo $__env->yieldContent('content'); ?>

  <!--End Home Bottom  -->
  <!--Footer  -->
  <div class="container wrapper footer">
    <div class="row footer-links">
      <div class="">
        <div class="col-xs-12 col-sm-4 text-center">
          <a href="javascript:;" target="_blank"><img src="/resources/frontend2/images/facebookicon-small.png"></a>
          <a href="javascript:;" target="_blank"><img src="/resources/frontend2/images/twittericon-small.png"></a>
          <a href="javascript:;" target="_blank"><img src="/resources/frontend2/images/instagramicon-small.png"></a>
        </div>
        <div class="col-xs-12 col-sm-4 text-center">
          <a href="/about">About us</a> |
          <a href="/contact">Contact us</a> |
          <a href="/help">Help</a> |
          <a href="/faqs">FAQs</a>
          <!-- <a href="/blog/index" target="_blank" rel="nofollow">Blog</a> |
          <a href="/developers">Developers</a> -->

        </div>
        <div class="col-xs-12 col-sm-4 text-center">
          <span>
            © <span id="year"></span> BuyPowerNow.com
            <script>
              var date = new Date().getFullYear()
              document.getElementById('year').innerHTML = date
            </script>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!--Footer  -->

  <script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/resources/frontend2/js/bootstrap.min.js"></script>
  <script src="/assets/lib/select2/select2.min.js"></script>
  <script type="text/javascript">
    var optionVars = [{
      "id": 1,
      "prods": [ {
        "name": "MTN Airtime VTU",
        "slug": "mtn-airtime"
      }, {
        "name": "GLO Airtime VTU",
        "slug": "glo-airtime"
      }, {
        "name": "9mobile Airtime VTU",
        "slug": "9mobile-airtime"
      }, {
        "name": "9Mobile Airtime Pin",
        "slug": "9mobile-pin"
      }, {
        "name": "Smile Network Payment",
        "slug": "smile-airtime"
      }]
    }, {
      "id": 3,
      "prods": [{
        "name": "Airtel Data",
        "slug": "airtel-data"
      }, {
        "name": "MTN Data",
        "slug": "mtn-data"
      }, {
        "name": "GLO Data",
        "slug": "glo-data"
      }, {
        "name": "9mobile Data",
        "slug": "9mobile-data"
      }, {
        "name": "Smile Payment",
        "slug": "smile"
      }]
    }, {
      "id": 6,
      "prods": [{
        "name": "DSTV Subscription",
        "slug": "dstv"
      }, {
        "name": "Gotv Payment",
        "slug": "gotv"
      }, {
        "name": "Startimes Subscription",
        "slug": "startimes"
      }]
    }, {
      "id": 7,
      "prods": [{
        "name": "Ikeja Electric Payment - PHCN",
        "slug": "ikeja-electric"
      }, {
        "name": "Eko Electric Payment - EKEDC",
        "slug": "eko-electric"
      }, {
        "name": "Abuja Electricity Distribution Company- AEDC",
        "slug": "abuja-electric"
      }, {
        "name": "KEDCO - Kano Electric",
        "slug": "kano-electric"
      }, {
        "name": "PHED - Port Harcourt Electric",
        "slug": "portharcourt-electric"
      }, {
        "name": "IBEDC - Ibadan Electricity Distribution Company",
        "slug": "ibedc"
      }]
    }, {
      "id": 8,
      "prods": [{
        "name": "WAEC Result Checker PIN",
        "slug": "waec-result"
      }]
    }, {
      "id": 10,
      "prods": [{
        "name": "Bank Deposit",
        "slug": "bank-deposit"
      }]
    }, {
      "id": 13,
      "prods": null
    }, {
      "id": 14,
      "prods": [{
        "name": "Website Design Deal - Hostparker",
        "slug": "website-design"
      }, {
        "name": "SMSclone.com",
        "slug": "smsclone"
      }]
    }, {
      "id": 15,
      "prods": [{
        "name": "Third Party Motor Insurance - Universal Insurance",
        "slug": "car-insurance"
      }]
    }];
    // $('#category').on('change', function(e){
    // $(this).find("option[value='0']").remove();
    //    var id = $("select#category option:selected").attr('value');
    //      $.ajax({
    //        type: "GET",
    //        url: "ajax/get-services",
    //        data: "category_id="+id,
    //        dataType: 'json',
    //        cache: false,
    //        beforeSend: function () { 
    //            $('#services').html('');
    //            $("#quick-load").addClass('show');
    //            $("#quick-form").css('opacity','0.3');
    //            // $('#category').html('<option value="1">Buy Phone Airtime</option><option value="3">Buy Internet Data</option><option value="2">Pay TV Subcription</option>');
    //        },
    //        success: function(data, textStatus, jQxhr) {  
    //        // alert('ooo');
    //        	$("#quick-load").removeClass('show');
    //            $("#quick-form").css('opacity','1.0'); 
    //            console.log(data);
    //            $('#class').append('<option value="">Select Class</option>');
    //            $.each(data,function (index,sectionObj) {
    //                 $('#services').append('<option value='+sectionObj.slug+'>'+sectionObj.name+'</option>');
    //            });
    //        }

    //      });
    //      e.preventDefault();
    // });
    $('#category').on('change', function(e) {
      $(this).find("option[value='0']").remove();
      var idxy = $("select#category option:selected").attr('value');
      $('#services').html('');
      $("#quick-load").addClass('show');
      $("#quick-form").css('opacity', '0.3');
      for (var i = 0; i < optionVars.length; i++) {
        var code = optionVars[i].id;
        if (code == idxy) {
          $("#quick-load").removeClass('show');
          $("#quick-form").css('opacity', '1.0');
          $('#class').append('<option value="">Select Above First</option>');
          $.each(optionVars[i].prods, function(index, sectionObj) {
            $('#services').append('<option value=' + sectionObj.slug + '>' + sectionObj.name + '</option>');
          });
        }
      }
      e.preventDefault();
    });
  </script>
  

  <!-- Remark -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1016066596;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>
  <script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1016066596/?guid=ON&amp;script=0" />
    </div>
  </noscript>


  <script src="../cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
  
</body>

</html><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/layouts/app.blade.php ENDPATH**/ ?>
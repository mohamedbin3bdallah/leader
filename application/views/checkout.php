<?php
    include('site/inc/head.php');
    include('site/inc/navbar.php');
?>
	<a title="" class="hide1"></a>
	
    <div class="container">
      <div class="row">

        <section class="span12">
          <div class="checkout-container">
            <div class="row">
              <div class="span10 offset1">

                <header>
                  <div class="row">
                    <div class="span2">
                      <a href="index-2.html"><img src="<?php echo base_url(); ?>theme/images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" />
                      </a>
                    </div>
                    <div class="span6">
                      <div class="center-align">
                        <h1><span class="light">مراجعة</span> عربة التسوق</h1>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="right-align">
                        <img src="<?php echo base_url(); ?>theme/images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />
                      </div>
                    </div>
                  </div>
                </header>

                <div class="checkout-steps">
                  <div class="clearfix">
                    <div class="step active">
                      <div class="step-badge">1</div>
                      عربة التسوق
                    </div>
                    <div class="step">
                      <div class="step-badge">2</div>
                      عنوان التوصيل
                    </div>
                    <div class="step">
                      <div class="step-badge">3</div>
                      تأكيد و دفع
                    </div>
                  </div>
                </div>

                <table class="table table-items">
                  <thead>
                    <tr>
                      <th colspan="2">Item</th>
                      <th>
                        <div class="align-center">الكمية</div>
                      </th>
                      <th>
                        <div class="align-right">السعر</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php $pricecount = 0; foreach($checkouts as $checkout) { $pricecount = $pricecount + (($checkout->price-$checkout->discount)*$checkout->qty);?>
                    <tr id="tr-<?php echo $checkout->vid; ?>">
                      <td class="image"><img src="<?php echo base_url(); ?>theme/images/dummy/cart-items/cart-item-1.jpg" alt="" width="124" height="124" />
                      </td>
                      <td class="desc"><?php echo $checkout->name_ar; ?>
                        <i title="Remove Item" class="fa fa-times-circle-o icon-remove-sign" id="<?php echo $checkout->vid; ?>" price="<?php echo ($checkout->price-$checkout->discount)*$checkout->qty; ?>"></i>
                      </td>
                      <td class="qty">
                        <input type="text" class="tiny-size" value="<?php echo $checkout->qty; ?>" />
                      </td>
                      <td class="price">
                        $<?php echo ($checkout->price-$checkout->discount)*$checkout->qty; ?>
                      </td>
                    </tr>
				  <?php } ?>
                    <tr>
                      <td colspan="2" rowspan="2">
                        <div class="alert alert-info">
                          <button data-dismiss="alert" class="close" type="button">×</button>
                          Shipping costs are calculated based on location. <a href="#">معلومات اكثر</a>
                        </div>
                      </td>
                      <td class="stronger">التوصيل:</td>
                      <td class="stronger">
                        <div class="align-right">$4.99</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="stronger">اجمالى فرعى:</td>
                      <td class="stronger">
						<input type="hidden" id="pricecount" value="<?php echo $pricecount; ?>">
						<input type="hidden" id="numcount" value="<?php echo count($checkouts); ?>">
                        <div class="size-16 align-right" id="total">$<?php echo $pricecount; ?></div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <hr/>
                <p class="right-align">
                  فى الخطوة التاليه مطلوب عنوان ا لتوصيل &nbsp; &nbsp;
                  <a href="checkout-step-2.html" class="btn btn-primary higher bold">إستكمال</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
	
  $(".table-items .icon-remove-sign").click(function() {
	  var num = $('#numcount').val();
	  var id = $(this).attr('id');
	  var total = parseInt($('#pricecount').val()) - parseInt($(this).attr('price'));
	  $.ajax({
		type: 'POST',
		url: '<?php echo base_url(); ?>home/removecheckout',
		data: {
			'id' : id,
		},
		success: function (response) {
			$('#tr-'+id).hide();
			document.getElementById('pricecount').innerHTML = total;
			document.getElementById('pricecount').value = total;
			document.getElementById('total').innerHTML = total;
			document.getElementById('num').innerHTML = num - 1;
		}
	});
  });
  
  $(".cart-container").hover(function() {
	  var id = "4";
	  var count = $(".len").children().length;
	  var count1 = $(".hide1").attr('title');
	
	  $.ajax({
		type: 'get',
		url: '<?php echo base_url(); ?>home/get_product',
		data: {
			'id' : id,
		},
		success: function (response) {
			 if (count <= count1) {
               $('.open').html(response);
                  };
		}
	});
  });
  
	/*$(".delete1").click(function() {
            var id = $(this).data("id");
            $.ajax({
                url:'<?php echo base_url(); ?>home/delete_request',
                type: 'POST',
                data: {
					'id' : id,
				},
                success:function(response)
                {
                     alert(response);
              }
            });
	});*/

  </script>
 <?php
       include('site/inc/footer.php');
   ?>
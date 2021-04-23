<?php
    include('site/inc/head.php');
    include('site/inc/navbar.php');
?>
<?php  

?>
     <a title="" class="hide1"></a>

    <div class="fullwidthbanner-container">
      <div class="fullwidthbanner">
        <ul>
          <li data-transition="premium-random" data-slotamount="3">
            <img src="site/images/dummy/slides/1/slide.png" alt="slider img" />
            <?php foreach ($get_product as $products) {
             ?>
            <div class="caption lft ltt" data-x="570" data-y="50" data-speed="4000" data-start="1000" data-easing="easeOutElastic">
              <img src="<?= $products->img ?>" alt="baloon" width="135" height="186" />
            </div>
            <?php } ?>

            <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
              عنوان جانبى او كلمة تسويقية
            </div>
            <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
              عنوان جانبى او كلمة تسويقية
            </div>
            <a href="features.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
مصنع ليدر
</a>
          </li>
          <li data-transition="premium-random" data-slotamount="3">
            <img src="site/images/dummy/slides/2/slide.png" alt="slider img" />

            <div class="caption lfb ltb" data-x="800" data-y="50" data-speed="1000" data-start="1000" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/2/woman.png" alt="woman" width="361" height="374" />
            </div>

            <div class="caption lfl str" data-x="400" data-y="20" data-speed="10000" data-start="1000" data-easing="linear">
              <img src="site/images/dummy/slides/2/plane.png" alt="aircraft" width="117" height="28" />
            </div>

            <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
              مياة و عصائر طبيعية
            </div>
            <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
              كلمات او عبارات تسويقية 
            </div>
            <a href="features.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
مصنع ليدر
</a>
          </li>
          <li data-transition="premium-random" data-slotamount="3">
            <img src="site/images/dummy/slides/3/slide.jpg" alt="slider img" />

            <div class="caption sfr fadeout" data-x="350" data-y="77" data-speed="1000" data-start="2500" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/3/phone.png" alt="phone in a hand" width="495" height="377" />
            </div>

            <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
             مياة و عصائر ليدر 
            </div>
            <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
              هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
            </div>
            <a href="site/icons.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
مصنع ليدر 
</a>
          </li>
          <li data-transition="premium-random" data-slotamount="3">
            <img src="site/images/dummy/slides/4/slide.png" alt="slider img"  />

            <div class="caption lft ltt" data-x="-150" data-y="0" data-speed="300" data-start="2000" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person1.png" alt="satisfied customer" width="108" height="204" />
            </div>
            <div class="caption lft ltt" data-x="0" data-y="0" data-speed="300" data-start="2200" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person2.png" alt="satisfied customer" width="108" height="321" />
            </div>
            <div class="caption lft ltt" data-x="500" data-y="0" data-speed="300" data-start="2400" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person3.png" alt="satisfied customer" width="108" height="139" />
            </div>
            <div class="caption lft ltt" data-x="720" data-y="0" data-speed="300" data-start="2600" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person4.png" alt="satisfied customer" width="108" height="191" />
            </div>
            <div class="caption lft ltt" data-x="940" data-y="0" data-speed="300" data-start="2800" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person5.png" alt="satisfied customer" width="108" height="139" />
            </div>
            <div class="caption lft ltt" data-x="1200" data-y="0" data-speed="300" data-start="3000" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person6.png" alt="satisfied customer" width="108" height="179" />
            </div>
            <div class="caption lft ltt" data-x="1350" data-y="0" data-speed="300" data-start="3200" data-easing="easeInOutCubic">
              <img src="site/images/dummy/slides/4/person7.png" alt="satisfied customer" width="108" height="133" />
            </div>

            <div class="caption lfl big_theme" data-x="120" data-y="140" data-speed="1000" data-start="500" data-easing="easeInOutBack">
              مصنع ليدر للعصائر و المياه
            </div>
            <div class="caption lfl small_theme" data-x="120" data-y="210" data-speed="1000" data-start="700" data-easing="easeInOutBack">
              عبارات جانبية <a href="#" target="_blank">ليدر للعصائر</a>!
            </div>
            <a href="http://support.proteusthemes.com/" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="280" data-speed="1000" data-start="900" data-easing="easeInOutBack">
محتوى نصى
</a>
          </li>
        </ul>
        <div class="tp-bannertimer"></div>
      </div>

      <div id="sliderRevLeft"><i class="icon-chevron-right"></i>
      </div>
      <div id="sliderRevRight"><i class="icon-chevron-left"></i>
      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="push-up over-slider blocks-spacer">

            <div class="row">
              <div class="span4">
                <a href="#" class="btn btn-block banner">
                  <span class="title"><span class="light">تخفيضات</span> الصيف</span>
                  <em>تخفيضات تصل الى 30%</em>
                </a>
              </div>
              <div class="span4">
                <a href="#" class="btn btn-block colored banner">
                  <span class="title"><span class="light">توصيل </span> مجانى</span>
                  <em>لاى طلب باكثر من 10000 جنيه</em>
                </a>
              </div>
              <div class="span4">
                <a href="#" class="btn btn-block banner">
                  <span class="title"><span class="light">منتجات</span> جديدة</span>
                  <em>محتوى نصى افتراضى</em>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row featured-items blocks-spacer">
        <div class="span12">

          <div class="main-titles lined">
            <h2 class="title"><span class="light">منتجات</span> العصائر</h2>
            <div class="arrows">
              <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
              <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>              
            </div>
          </div>
        </div>
        <div class="span12">

          <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
            <div class="slide">
              <div class="row">
                <?php foreach ($get_product_4 as $get_product4) {
                  
                 ?>
                <div class="span4">
                  <div class="product">
                    <div class="product-img featured">
                      <div class="picture">
                        <a href="#"><img src="<?= base_url() ?>site/images/dummy/featured-products/<?= $get_product4->img ?>" alt="" width="518" height="358" />
                        </a>
                        <div class="img-overlay">
                          <a href="#" data-id="<?= $get_product4->id ?>" class="btn more fav btn-primary"><i class="icon-heart"></i></a>
                          <a href="#"  data-id="<?= $get_product4->id ?>" data-idcat="<?= $get_product4->id_categ ?>" class="btn buy-ajax buy btn-danger">إشترى</a>
                        </div>
                      </div>
                    </div>
                    <div class="main-titles">
                      <h4 class="title"><?php  
                  if($get_product4->discount == null){echo "$".$get_product4->price; }
                  else{echo "<strike>$".$get_product4->price."</strike> / $".$get_product4->discount; } ?></h4>
                      <h5 class="no-margin"><a href="#"><?= $get_product4->name_ar ?></a></h5>
                    </div>
                    <p class="desc"><?= $get_product4->description_ar ?></p>
                  </div>
                </div>
                <?php } ?>

            </div>
       
          </div>
        </div>
      </div>
      
      
      <div class="row featured-items blocks-spacer">
        <div class="span12">

          <div class="main-titles lined">
            <h2 class="title"><span class="light">منتجات</span> المياة</h2>
            <div class="arrows">
              <a href="#" class="icon-chevron-left" id="featureItemsLeft"></a>
              <a href="#" class="icon-chevron-right" id="featureItemsRight"></a>              
            </div>
          </div>
        </div>
        <div class="span12">

          <div class="carouFredSel" data-autoplay="false" data-nav="featureItems">
            <div class="slide">
              <div class="row">
                <?php foreach ($get_product_3 as $get_product3) {
                  
                 ?>
                <div class="span4">
                  <div class="product">
                    <div class="product-img featured">
                      <div class="picture">
                        <a href="#"><img src="<?= base_url() ?>site/images/dummy/featured-products/<?= $get_product3->img ?>" alt="" width="518" height="358" />
                        </a>
                        <div class="img-overlay">
                          <a href="#" data-id="<?= $get_product3->id ?>" class="btn more fav btn-primary"><i class="icon-heart"></i></a>
                          <a href="#" data-id="<?= $get_product3->id ?>" class="btn buy-ajax buy btn-danger">إشترى</a>
                        </div>
                      </div>
                    </div>
                    <div class="main-titles">
                      <h4 class="title"><?php  
                  if($get_product3->discount == null){echo "$".$get_product3->price; }
                  else{echo "<strike>$".$get_product3->price."</strike> / $".$get_product3->discount; } ?></h4>
                      <h5 class="no-margin"><a href="#"><?= $get_product3->name_ar ?></a></h5>
                    </div>
                    <p class="desc"><?= $get_product3->description_ar ?></p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>

    <div class="boxed-area blocks-spacer">
      <div class="container">
                 <?php foreach ($get_product_new as $get_product_new) {
                  
                 ?>
                <div class="span4">
                  <div class="product">
                    <div class="product-img featured">
                      <div class="picture">
                        <a href="#"><img src="<?= base_url() ?>site/images/dummy/featured-products/<?= $get_product3->img ?>" alt="" width="518" height="358" />
                        </a>
                        <div class="img-overlay">
                          <a href="#" data-id="<?= $get_product_new->id ?>" class="btn more fav btn-primary"><i class="icon-heart"></i></a>
                          <a href="#" data-id="<?= $get_product_new->id ?>" class="btn buy-ajax buy btn-danger">إشترى</a>
                        </div>
                      </div>
                    </div>
                    <div class="main-titles">
                      <h4 class="title"><?php  
                  if($get_product_new->discount == null){echo "$".$get_product_new->price; }
                  else{echo "<strike>$".$get_product_new->price."</strike> / $".$get_product_new->discount; } ?></h4>
                      <h5 class="no-margin"><a href="#"><?= $get_product_new->name_ar ?></a></h5>
                    </div>
                    <p class="desc"><?= $get_product_new->description_ar ?></p>
                  </div>
                </div>
                <?php } ?>
         

        </div>
      </div>
    </div>

    <div class="most-popular blocks-spacer">
      <div class="container">

        <div class="row">
          <div class="span12">
            <div class="main-titles lined">
              <h2 class="title"><span class="light">أكثر</span> منتجاتنا مشاهدة</h2>
            </div>
          </div>
        </div>
        <div class="row popup-products">
                 <?php foreach ($get_product_watch as $get_product_watch) {
                  
                 ?>
          <div class="span3">
            <div class="product">
              <div class="product-inner">
                <div class="product-img">
                  <div class="picture">
                    <a href="#"><img src="<?= base_url() ?>site/images/dummy/featured-products/<?= $get_product_watch->img ?>" alt="" width="540" height="412" />
                    </a>
                    <div class="img-overlay">
                      
                      <a href="#" class="btn buy btn-danger">أضف الى العربة</a>
                    </div>
                  </div>
                </div>
                <div class="main-titles no-margin">
                  <h4 class="title"><?php  
                  if($get_product_watch->discount == null){echo "$".$get_product_watch->price; }
                  else{echo "<strike>$".$get_product_watch->price."</strike> / $".$get_product_watch->discount; } ?></h4>
                  <h5 class="no-margin"><?= $get_product_watch->name_ar ?></h5>
                </div>
                <p class="desc"><?= $get_product_watch->description_ar ?></p>
                <div class="row-fluid hidden-line">
                  <div class="span6">
                    <a href="#" data-id="<?= $get_product_watch->id ?>" class="btn fav btn-small"><i class="icon-heart"></i></a>
                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                  </div>
                  <div class="span6 align-left">
                    <?php switch ($get_product_watch->rate) {
                      case '0':
                        echo "
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>";
                        break;
                      case '1':
                        echo "
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>";
                        break;                        
                      case '2':
                        echo "
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>";
                        break;
                      case '3':
                        echo "
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star'></span>
                    <span class='icon-star'></span>";
                        break;
                      case '4':
                        echo "
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star'></span>";
                        break; 
                      case '5':
                        echo "
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>
                    <span class='icon-star stars-clr'></span>";
                    
                        break;                                                                                              
                 
                    }?>

                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>

        </div>
      </div>
    </div>

<script type="text/javascript">
$(document).ready(function(){

$('.buy-ajax').click(function(){
// var url = "<?= base_url(); ?>";
var id =  $(this).data('id');
var id_categ =  $(this).data('idcat');
            $.ajax(
            {
                url:'<?= base_url()?>index.php/home/insert_product',
                type: 'POST',
                data:{id:id,id_categ:id_categ},

             
                success:function(data)
                {
        // var json = JSON.parse(data);

                   $(".hide1").attr('title',data);
                    $(".num").text("("+data+")");
                  // $(".total-price").text("$"+json[0]['total_price']);
                  alert("<div class='alert-msgs'>تم اضافة المنتج الى سلة التسوق</div>")

              }
                          
            });  
});


$('.fav').click(function(){
// var url = "<?= base_url(); ?>";
var id =  $(this).data('id');
            $.ajax(
            {
                url:'<?= base_url()?>index.php/home/insert_favourite',
                type: 'POST',
                dataType: 'json',
                data:{id:id},

             
                success:function(data)
                {
                   $(".num-fav").text("("+data+")");
                }
                          
            });  
});
$(".cart-container").hover(function(){
var id = "4";
var count = $(".len").children().length;
var count1 = $(".hide1").attr('title');

console.log(count1); 
 $.ajax({
        url:'<?= base_url()?>index.php/home/get_product',
        type: 'get',
        // dataType: 'json',
        data:{id:id},
         success:function(data){

 
                if (count <= count1) {
               $('.open').html(data);
                  };
  

  }
  });
});

    
$('.delete1').click(function(){
            var id = $(this).data("id");
            alert('rtgber');
            $.ajax(
            {
                url:'<?= base_url()?>index.php/home/delete_request',
                type: 'POST',
                data:{id:id},

             
                success:function(data)
                {
    
                     alert(data);


                  

              }
                          
            });
 

});




});

</script>
   <?php
       include('site/inc/footer.php');
   ?>
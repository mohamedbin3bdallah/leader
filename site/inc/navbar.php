<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation">
                            <li class="active"><a href="index.html"> الرئيسية</a></li>
                            <li><a href="about-us.html">عن ليدر</a></li>
                            <li class="dropdown dropdown-megamenu">
                                <a href="#" class="dropdown-toggle"> سوق ليدر <b class="caret"></b> </a>
                                <ul class="dropdown-menu megamenu container">
                                    <li class="row">
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="#">العصائر</a></li>
                                            </ul>
                                            <ul class="nav unstyled">
                                                <li><a href="#">تصنيف</a</li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a</li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                            </ul>
                                        </div>
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="#">المياه</a></li>
                                            </ul>
                                            <ul class="nav unstyled">
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                                <li><a href="#">تصنيف</a></li>
                                            </ul>
                                        </div>
                                        <div class="span3">
                                            <a href="#"><img src="images/drink.png" alt="woman in red" width="540" height="270"></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <li><a href="contact.html">إتصل بنا</a></li>
                        </ul>

                        <form class="navbar-form pull-left" action="#" method="get">
                            <button type="submit"><span class="icon-search"></span>
                            </button>
                            <input type="text" class="span1" name="search" id="navSearchInput">
                        </form>
                    </div>
                </div>

                <div class="span3">
<!--                     <?php
                    $this->db->select_sum('total_price');
                    $total_price = $this->db->get_where('order',array("client_id" => "1","view" => "1"))->result();
                                        foreach ($total_price as $total_price) {
                        
                    }
                    $get_market = $this->data->get_table_data("order",array("client_id" => "1","view" => "1")," ","id","desc");
                    foreach ($get_market as $get_markets) {
                        
                    }
                    ?> -->
                    <div class="cart-container" id="cartContainer">
                            <div class="event">

                        <div class="cart">
                            <?php  $num = $this->db->get_where("visual_delivery",array("id_client" => "4"))->num_rows();
 ?>
                            <p class="items">عربة التسوق <span class="dark-clr num" id="num">(<?= $num ?>)</span>
                            </p>
                            <p class="dark-clr total-price hidden-tablet"></p>
                            <a href="<?= base_url() ?>home/checkout" class="btn btn-danger">

                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="open-panel">
                        <div class="open">

                          </div>
                            <div class="proceed">
                                <a href="<?= base_url() ?>home/checkout" class="btn btn-danger pull-left bold higher">الدفع <i class="icon-shopping-cart"></i></a>
                                <small>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها <a href="#">معلومات اكثر</a></small>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

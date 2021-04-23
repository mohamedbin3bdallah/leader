<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	

     public function __construct()
        {
                parent::__construct();
    $this->load->model('data','','true');



        }
	

	public function index() {
		$data['get_product'] = $this->data->get_table_data("category",array()," ","id","desc");
		$data['get_product_3'] = $this->data->get_table_data("shop_product",array("id_categ" => "3"),6,"id","desc");
		$data['get_product_4'] = $this->data->get_table_data("shop_product",array("id_categ" => "4"),6,"id","desc");
		$data['get_product_new'] = $this->data->get_table_data("shop_product",array(),6,"id","desc");
		$data['get_product_watch'] = $this->data->get_table_data("shop_product",array(),4,"id","desc");
		$this->load->view('home',$data);
	}

	public function checkout() {
		//$this->session->userdata('uid')
		$data['checkouts'] = $this->data->getjoin('visual_delivery.id as vid,visual_delivery.qty as qty,shop_product.*','visual_delivery',array('shop_product'=>'visual_delivery.id_shop = shop_product.id','client'=>'visual_delivery.id_client = client.id'),array('visual_delivery.id_client'=>'4'));
		$this->load->view('checkout',$data);
	}
	
	public function removecheckout()
	{
		if(isset($_POST['id']) && $_POST['id'] != '' && $_POST['id'] != ' ')
		{
			if($this->data->delete_table_row('visual_delivery',array('id'=>$_POST['id']))) echo 1;
			else echo 0;
		}
		else echo 0;
	}

	public function insert_product() {

		$date_input = array();
		$date_input['id_shop'] = $this->input->post('id');
		$date_input['id_client'] = "4";
		$date_input['id_categ'] = $this->input->post('id_categ');
		$insert = $this->data->insert_filed("visual_delivery",$date_input);
					$query3 = $this->db->get_where("visual_delivery",array("id_client" => "4"))->num_rows();
					$query2 = $this->data->get_table_data("order",array("id_shop" => $this->input->post('id'),"client_id" => "4"));

			echo json_encode($query3);
		
	}
	public function insert_favourite() {

		$date_input = array();
		$date_input['id_product'] = $this->input->post('id');
		$date_input['id_client'] = "4";
		$insert = $this->data->insert_filed("favourite",$date_input);
		$query4 = $this->db->get_where("favourite",array("id_client" => "4"))->num_rows();
			echo json_encode($query4);

			return true;

	}
	public function get_product() {

		$client_id = $this->input->get("id");

		$query = $this->data->get_table_data("visual_delivery",array("id_client" => $client_id));
		?>
                            
   
              	 <div class="len">
             
                    <?php
					$ppricecount = 0; 
		foreach ($query as $value) {
			$qu = $this->data->get_table_data("shop_product",array("id" => $value->id_shop));
			foreach ($qu as $val) {
				$ppricecount = $ppricecount + (($val->price-$val->discount)*$value->qty);
			}
		?>

     <div class='item-in-cart clearfix' id='div-<?= $value->id ?>'>
     <div class='image'>
     <img src='<?php echo base_url(); ?>site/images/dummy/cart-items/cart-item-1.jpg' width='124' height='124' alt='cart item' /></div>
     <div class='desc'><strong><a href='#'><?= $val->name_ar ?></a></strong>
     <span class='light-clr qty'>الكمية: 1&nbsp;<i class='fa fa-times-circle-o icon-remove-sign delete1' data-id='<?= $value->id ?>' title='Remove Item'></i></span>
     </div>
     <div class='price'><strong>$<?= ($val->price-$val->discount)*$value->qty ?></strong></div>
     </div>


                      
     <?php
			// $query3 = $this->db->get_where("visual_delivery",array("id_client" => "4"))->num_rows();
			// echo json_encode($query3);
 }
 ?>
      </div>

                         <div class="summary">
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">توصيل</div>
                                        <div class="span6 align-left">$4.99</div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">اجمالى فرعى</div>
                                        <div class="span6 align-left size-16">$<?= $ppricecount ?></div>
                                    </div>
                                </div>
                            </div>
							<script>
							$(".delete1").click(function() {
            var id = $(this).data("id");
			var num = $('#numcount').val();
	  var total = parseInt($('#pricecount').val()) - parseInt($(this).attr('price'));
            $.ajax({
                url:'<?php echo base_url(); ?>home/delete_request',
                type: 'POST',
                data: {
					'id' : id,
				},
                success:function(response)
                {
					$('#div-'+id).hide();
					$('#tr-'+id).hide();
                     document.getElementById('pricecount').innerHTML = total;
					document.getElementById('pricecount').value = total;
					document.getElementById('total').innerHTML = total;
					document.getElementById('num').innerHTML = num - 1;
              }
            });
	});

  </script>
 <?php
	}
	public function delete_request() {

	 $id = $this->input->post("id");
	 $delete = $this->data->delete_table_row("visual_delivery",array("id" => $id));
	 if ($delete = "true") {
	 	echo 1;
	 }

	}
	
}
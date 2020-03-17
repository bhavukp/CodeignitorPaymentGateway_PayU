<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
               
    }
 public function index(){
    $this->load->view('form1');
 }
 public function check(){
     
     // all values are required
    $amount =  $this->input->post('payble_amount');
    $product_info = $this->input->post('product_info');
    $customer_name = $this->input->post('customer_name');
    $customer_emial = $this->input->post('customer_email');
    $customer_mobile = $this->input->post('mobile_number');
    $customer_address = $this->input->post('customer_address');
    
    //payumoney details
    
    
        $MERCHANT_KEY = "gtKFFx"; //change  merchant with yours
        $SALT = "eCwWELxi";  //change salt with yours 

        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
        
         $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
         $hash = strtolower(hash('sha512', $hashstring));
         
       $success = base_url() . 'Status';  
        $fail = base_url() . 'Status';
        $cancel = base_url() . 'Status';
        
        
         $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,           
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://test.payu.in", //for live change action  https://secure.payu.in || for test https://test.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel            
        );

    $data2 = array(
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,           
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,        
        );

         $this->load->model('Send_data');
         $this->Send_data->insert_data($data2);

        $this->load->view('confirmation', $data);   
     }
   
    
   }

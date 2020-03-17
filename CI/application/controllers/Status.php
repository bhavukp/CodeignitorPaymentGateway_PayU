<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();      
    }
public function index() {
       $status = $this->input->post('status');
      if (empty($status)) {
            redirect('Home');
        }
        
       $mihpayid = $this->input->post('mihpayid'); //you need to add associative array data like this
       $mode = $this->input->post('mode');
       $booking_status = $this->input->post('status');
       $cardCategory = $this->input->post('cardCategory');
       $cardType=$this->input->post('card_type');
       $unmappedstatus=$this->input->post('unmappedstatus');
       $discount=$this->input->post('discount');
       $netamountdebit=$this->input->post('net_amount_debit');
       $addedon=$this->input->post('addedon');
       $firstname=$this->input->post('firstname');
       $lastname=$this->input->post('lastname');
       $state=$this->input->post('state');
       $zipcode=$this->input->post('zipcode');
       $field1=$this->input->post('field1');
       $field2=$this->input->post('field2');
       $field3=$this->input->post('field3');
       $field4=$this->input->post('field4');
       $field5=$this->input->post('field5');
       $field6=$this->input->post('field6');
       $field7=$this->input->post('field7');
       $field8=$this->input->post('field8');
       $field9=$this->input->post('field9');
       $paymentsource=$this->input->post('payment_source');
       $pgtype=$this->input->post('PG_TYPE');
       $bankrefnum=$this->input->post('bank_ref_num');
       $bankcode=$this->input->post('bankcode');
       $error=$this->input->post('error');
       $errorMessage=$this->input->post('error_Message');
       $nameoncard=$this->input->post('name_on_card');
       $cardnum=$this->input->post('cardnum');
       $issuingbank=$this->input->post('issuing_bank');





        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "eCwWELxi"; //  Your salt
        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {

            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }

         $data['hash'] = hash("sha512", $retHashSeq);
          $data['amount'] = $amount;
          $data['txnid'] = $txnid;
          $data['posted_hash'] = $posted_hash;
          $data['status'] = $status;

          $data3 = array(
            'mihpayid' => $mihpayid,
            'mode' => $mode,
            'booking_status' => $booking_status,
            'cardCategory' => $cardCategory,
            'cardType' => $cardType,
            'unmappedstatus'=> $unmappedstatus,
            'discount'=> $discount,
            'netamountdebit'=> $netamountdebit,
            'addedon'=> $addedon,
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'state'=> $state,
            'zipcode'=> $zipcode,
            'field1'=> $field1,
            'field2'=> $field2,
            'field3'=> $field3,
            'field4'=> $field4,
            'field5'=> $field5,
            'field6'=> $field6,
            'field7'=> $field7,
            'field8'=> $field8,
            'field9'=> $field9,
            'paymentsource'=> $paymentsource,
            'pgtype'=> $pgtype,
            'bankrefnum'=> $bankrefnum,
            'bankcode'=> $bankcode,
            'error'=> $error,
            'errorMessage'=> $errorMessage,
            'nameoncard'=> $nameoncard,
            'cardnum'=> $cardnum,
            'issuingbank'=> $issuingbank,

          );

          $this->load->model('Send_data');
          $this->Send_data->update_data($data3,$txnid);

          if($status == 'success'){
              $this->load->view('success', $data);   
         }
         else{
              $this->load->view('fail', $data); 
         }
     
    }
    
   }
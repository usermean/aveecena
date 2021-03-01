<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-sH4NT4cdRBrQuDq5VUsrw-43', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
		
    }

	public function index()
	{
		echo 'test notification handler';
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result,"true");

        $order_id = $result['order_id'];
		$emailsiswa = $result['email'];
		$getemail = $this->db->get_where('transaksi', ['order_id' => $order_id])->row_array();
		$kelas = $getemail['kelas'];

        $data = [
            'status_code' => $result ['status_code']
			];

        if($result['status_code']==200){
            
            $this->db->update('transaksi', $data, array('order_id' => $order_id));
            
            if ($kelas=="keperawatan") {
				$keperawatan = [
					'keperawatan' => 1
				];

				$this->db->update('siswa', $keperawatan, array('email' => $getemail['email']));
			} elseif ($kelas=="kebidanan") {
				$kebidanan = [
					'kebidanan' => 1
				];
				$this->db->update('siswa', $kebidanan, array('email' => $getemail['email']));
			} elseif ($kelas=="kedokteran") {
				$kedokteran = [
					'kedokteran' => 1
				];
				$this->db->update('siswa', $kedokteran, array('email' => $getemail['email']));
			} elseif ($kelas=="gizi") {
				$gizi = [
					'gizi' => 1
				];
				$this->db->update('siswa', $gizi, array('email' => $getemail['email']));
			} elseif ($kelas=="apoteker") {
				$apoteker = [
					'apoteker' => 1
				];
				
				$this->db->update('siswa', $apoteker, array('email' => $getemail['email']));
			}
        }
        
// 		if($result){
// 		$notif = $this->veritrans->status($result->order_id);
// 		}

// 		error_log(print_r($result,TRUE));

		//notification handler sample

		/*
		$transaction = $notif->transaction_status;
		$type = $notif->payment_type;
		$order_id = $notif->order_id;
		$fraud = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP
		      echo "Transaction order_id: " . $order_id ." is challenged by FDS";
		      } 
		      else {
		      // TODO set payment status in merchant's database to 'Success'
		      echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
		      }
		    }
		  }
		else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'
		  echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
		  } 
		  else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'
		  echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
		  } 
		  else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
		}*/

	}
}

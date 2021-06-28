<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	$CI = &get_instance();
	$workingKey='6403FD1D9ED78236DE3274624B006560';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
		if($i==0)	$order_id=$information[1];
	}
	echo "id= ".$order_id; die();
	$status=0;
	
	if($order_status==="Success")
	{	$status=1;
		echo "<br>Thank you for booking with us.";
		$update=$CI->Home_model->update_records(array('rb_id'=>$order_id),'rm_booking',array('rb_py_status'=>1,'rb_isDelete'=>0));
		$this->session->set_userdata('pay_status',$status);
		redirect('payBook');
	}
	else if($order_status==="Aborted")
	{
		$status=3;
		echo "<br>Thank you for showing interst with us but your transaction was aborted";
		$update=$CI->Home_model->update_records(array('rb_id'=>$order_id),'rm_booking',array('rb_py_status'=>3,'rb_isDelete'=>1));//$where,$table,$data
		$this->session->set_userdata('pay_status',$status);
		redirect('payBook');
	}
	else if($order_status==="Failure")
	{
		$status=4;
		echo "<br>Thank you for showing interst with us but your transaction was failed.";
		$update=$CI->Home_model->update_records(array('rb_id'=>$order_id),'rm_booking',array('rb_py_status'=>4,'rb_isDelete'=>1));
		$this->session->set_userdata('pay_status',$status);
		redirect('payBook');
	}
	else
	{
		$status=3;
		echo "<br>Security Error. Illegal access detected";
		$update=$CI->Home_model->update_records(array('rb_id'=>$order_id),'rm_booking',array('rb_py_status'=>3,'rb_isDelete'=>1));
		$this->session->set_userdata('pay_status',$status);
		redirect('payBook');		
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
?>

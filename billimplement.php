
 <?php
  session_start();
  if($_SESSION['uname'])
  {
      echo '';
  }
  else{
     header("location:login_form.php");
  }
 
                include("dbconnect.php");

                   $id=$_SESSION['uname'];
                   $name=$_REQUEST['Name'];
                   $p_name=$_REQUEST['p_name'];
                   $p_price=$_REQUEST['p_price'];
                   $Quantity=$_REQUEST['Quantity'];
                   $total=$_REQUEST['total'];
                   $email=$_REQUEST['email'];
                   $mobileno=$_REQUEST['mobileno'];
                   $address=$_REQUEST['address'];
                  
                   $pay_method=$_REQUEST['pay_method'];
                   $status=$_REQUEST['status'];
                   date_default_timezone_set("Asia/Kolkata");
                   $date=date("m-d-Y h:i A");
                   $image=$_REQUEST['image'];

                   
              
 
    
                   $sql="INSERT INTO `userorders`(`Name`,`email`,`mobileno`,`address`,`pay_method`,`p_name`,`Quantity`,`p-price`,`Total`,`status`,`userid`,`date`,`image`)VALUES('$name','$email','$mobileno','$address','$pay_method','$p_name','$Quantity','$p_price','$total','$status','$id','$date','$image')";
                   $result=mysqli_query($conn,$sql);

                   $deletecart="delete from menu where userid='$id'";
                   $result2=mysqli_query($conn,$deletecart);
                     
                  //  $_SESSION['total'] = $total;
                  //  $_SESSION['id'] = $id;

                     setcookie("total", "$total", time() + 500, "/");
                     setcookie("id","$id", time() + 500,"/");
                   
                   
                   if($pay_method=="Credit_Card"){
                     header("Location:phonepay.php");
                    }
                    else{
                      header("Location:userorder.php");
                    }
                



                    $apiKey = "099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
                    $merchantId = 'PGTESTPAYUAT';
                    $keyIndex= 1;
                    
                    $paymentData = array(
                        'merchantId' => "$merchantId",
                        'merchantTransactionId' => "$id",
                        "merchantUserId"=>"MUID123",
                        'amount' => 100,
                        'redirectUrl'=>"http://localhost/Restaurant-Management-Project/phonepaysuccess.php",
                        'redirectMode'=>"POST",
                        'callbackUrl'=>"http://localhost/Restaurant-Management-Project/phonepaysuccess.php",
                        'merchantOrderId'=> '987654321',
                       'mobileNumber'=>'9561183395',
                       'message'=>'Order description',
                       'email'=>'hrishi@2gmail.com',
                       'shortName'=>'hrishi',
                       'paymentInstrument'=> array(    
                        'type'=> 'PAY_PAGE',
                      )
                    );
                    
                    $jsonencode = json_encode($paymentData);
                     $payloadMain = base64_encode($jsonencode);
                    
                    $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
                    $sha256 = hash("sha256", $payload);
                    $final_x_header = $sha256 . '###' . $keyIndex;
                    $request = json_encode(array('request'=>$payloadMain));
                    
                    
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                       CURLOPT_POSTFIELDS => $request,
                      CURLOPT_HTTPHEADER => [
                        "Content-Type: application/json",
                         "X-VERIFY: " . $final_x_header,
                         "accept: application/json"
                      ],
                    ]);
                    
                    $response = curl_exec($curl);
                    $err = curl_error($curl);
                    
                    curl_close($curl);
                    
                    if ($err) {
                      echo "cURL Error #:" . $err;
                    } else {
                       $res = json_decode($response);
                     
                    if(isset($res->success) && $res->success=='1'){
                      $paymentCode=$res->code;
                      $paymentMsg=$res->message;
                      $payUrl=$res->data->instrumentResponse->redirectInfo->url;
                    
                      header("Location:$payUrl");
                    }
                    }
                        
                    
                    












                ?>

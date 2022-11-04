<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    
    $phoneno = $singleRow['phone'];
    
     $parameters = [
     
        'message'   => 'Your Order Have Been Ready',
        'sender_id' => 'ShanTailors',
        'recipient' => $phoneno,
        'type'      => 'plain', // possible value: plain, mms, voice, whatsapp, default plain
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://app.paid2marketing.com/api/v3/sms/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameters));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer 6|aAXIZiAVOkbJFyMUCGVnvjosW3dLmN0u4COfSAJu',
                'Content-Type: application/json',
                'Accept: application/json',
        ]);

        $get_sms_status = curl_exec($ch);
        
        if (curl_errno($ch)) {
            $get_sms_status = curl_error($ch);
        }
        
        curl_close($ch);
        
          header("Location: vieworder.php");
                
            


?>



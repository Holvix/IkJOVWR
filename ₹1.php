<html><head><title>Earning Zone </title> <meta name="viewport" content="width=device-width"><link href="/favicon.ico" rel="icon" type="image/x-icon" /> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre|Laila" rel="stylesheet"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <style>a{font-weight:bold;text-decoration:none;}body,input{text-align:center;letter-spacing:1px;font-family: Laila;}hr{border: 0;height: 0.7px;background-image:linear-gradient(to right, #c7bbbb, blue, #c7bbbb);}input,select{outline:none;}.text{background-image:linear-gradient(to right, #04918d, blue, #04918d);width: 83%;padding: 8px 20px;margin: 7px 0;display: inline-block; border: 2px solid ;border-radius: 4px; box-sizing: border-box;text-align:center;font-weight:bold;color:black;}.input{height: 50px;width: 95%;border: 0;border-radius: 4px;margin: 0 auto; margin: 15px 0;padding: 0 25px 0 25px;background: #e2dbddd7;font-family: 'Montserrat';font-size: 14px;font-weight: 500;letter-spacing: 0;color: #0418b7;cursor: pointer;outline: none;box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);-webkit-transition: 300ms;-moz-transition: 300ms;transition: 300ms;}.submit{ height: 50px; width: 80%; border: 0; border-radius: 4px; margin: 0 auto; margin: 15px 0; padding: 0 25px 0 25px; background: #5b5efbd7; font-family: 'Montserrat'; font-size: 14px; font-weight: 500; text-transform: capitalize; letter-spacing: 0; color: #0418b7; cursor: pointer; outline: none; box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2); -webkit-transition: 300ms; -moz-transition: 300ms; transition: 300ms;}select{background-image:linear-gradient(to right, blue, gray, blue);width: 60%;padding: 8px 20px;margin: 7px 0;display: inline-block; border: 1px solid ;border-radius: 0px; box-sizing: border-box;text-align:center;font-weight:bold;font-color:#c7bbbb;color:black;}::placeholder{font-weight:bold;color:black;}.submit{font-weight:bold;width: 45%;background-image:linear-gradient(to right,#00e8ff, #00e8ff, #00e8ff);color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;}.img011{ height: 50px;width: 100%;border: 0;border-radius: 4px;margin: 0 auto;margin: 15px 0;padding: 0 25px 0 25px;font-family: 'Montserrat';font-size: 14px;font-weight: 500;letter-spacing: 0;color: #0418b7;cursor: pointer;outline: none;box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);-webkit-transition: 300ms;-moz-transition: 300ms;transition: 300ms;}#leftbox { float:left; margin:0 auto; width:70%; height:auto; } #middlebox{ float:left; width:30%; height:auto; }.submit:hover{background-image:linear-gradient(to right, green, green, green);}bold{color:linear-gradient(to right, #c7bbbb, blue, #c7bbbb);font-weight:bold;}body{color:#F50057;}h5{text-align: left;}</style><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><center><h3><font color="black" size="4px"><hr><b>1RS UPI BOOSTER</b></font></h3><hr>

<?php
if (!isset($_GET['submit'])) {
    echo '<form method="GET">';
    echo '<input type="text" name="upi" class="input" placeholder="Enter Your UPI ID" required />';
    echo '<input type="submit" name="submit" class="submit" value="Submit" />';
    echo '</form>';

} else {

$upim = $_GET["upi"];

function curl($link, $data, $headers, $type){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $type);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, FALSE);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

$url = "https://www.my11circle.com/api/fl/withdraw/v1/bankAccountValidation";


$upi = "$upim"; // Replace with your UPI ID
$data = '{"upiId":"'.$upi.'","depositType":1,"channelId":2003,"idVerifiedName":"Shiji Shiji","initPageType":"withdraw"}';


$headers = [
    'content-length: ' . strlen($data),
    'content-type: application/json;charset=UTF-8',
    'user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19PI Build/RP1A.200720.011)',
    'accept: */*',
    'origin: https://www.my11circle.com',
    'x-requested-with: com.games24x7.my11circle.fantasycricket','cookie: device.info.cookie={"bv":"131.0.6778.260","bn":"Chrome WebView","osv":"11","osn":"Android","tbl":"false","vnd":"Xiaomi","mdl":"M2004J19PI"}
priority: u=1, i','cookie: device.info.cookie={"bv":"131.0.6778.260","bn":"Chrome WebView","osv":"11","osn":"Android","tbl":"false","vnd":"Xiaomi","mdl":"M2004J19PI"}
priority: u=1, i','cookie: NA_VISITOR=3545438c-5af5-4e8d-824e-87354011158a','cookie: SSIDuser=SSIDe6b9e5c7-74aa-4aa1-b815-005f1e2b6df0%3A59645445','cookie: SSID=SSIDe6b9e5c7-74aa-4aa1-b815-005f1e2b6df0','cookie: sameSiteNoneSupported=true','cookie: AWSALBCORS=8XQvuP4ncdIojRo6FensCJZODYbS/3Lj4Aj6WEOZ75dJ2pk1XDcvErXLo6+3+PE/KByHjm18zxZq36z/PuU/dUeAxhrftfgux+KSGVuDGsVdzfdpCQnGI05KzuQM','cookie: AWSALB=8XQvuP4ncdIojRo6FensCJZODYbS/3Lj4Aj6WEOZ75dJ2pk1XDcvErXLo6+3+PE/KByHjm18zxZq36z/PuU/dUeAxhrftfgux+KSGVuDGsVdzfdpCQnGI05KzuQM',];

{
echo$resp = curl($url,$data,$headers,"POST");
echo"<meta http-equiv='refresh' content=2;url=https://t.me/earning_zone_777>";

}}?>
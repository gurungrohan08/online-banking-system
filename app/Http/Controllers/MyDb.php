<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\tran;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MyDb extends Controller
{
    //Home Page
    public function index()
    {
        return view('index');
    }

    // Creating Account
    public function createAccount(Request $req)
    {
        if ($req->input('submit')) {
            $email = $req->input('email');                //getting email to check if this email exist in database
            $cae = account::where('email', $email)         //checking if this email exist in database
                ->get();
            $arcae = sizeof($cae);                        //getting size of array
            if ($arcae > 0) {                             //if email found in database the size of array will be 1
                return view('createaccount', ["msg" => "Account Already Exist"]);
            } else {
                $ct = account::all();             //getting all records from database to set account number
                $ar = sizeof($ct);                //to get the size of array
                if ($ar > 0) {
                    $acno = "SBI" . 101 + $ar;
                } else {
                    $acno = "SBI101";
                }
                $ob = new account();
                $ob->acno = $acno;
                $ob->pin = $req->input('pin');
                $ob->name = $req->input('name');
                $ob->fname = $req->input('fname');
                $ob->email = $req->input('email');
                $ob->phno = $req->input('phone');
                $ob->gender = $req->input('gender');
                $ob->country = $req->input('country');
                $ob->state = $req->input('state');
                $ob->city = $req->input('city');
                $ob->ammount = $req->input('ammount');
                $ob->save();

                return view('createaccount', ["msg" => "Congratulation your account is successfully created. Your Account Number is $acno"]);
            }
        } else
            return view('createaccount', ["msg" => ""]);
    }

    //Deposit
    public function deposit(Request $req)
    {

        if ($req->input('submit')) {
            $acno = session("myses")["acno"];
            $ammount = $req->input('ammount');
            $data = account::where('acno', $acno)->get();
            $data = $data->first()->toArray();
            $newamnt = $data['ammount'] + $ammount;
            $dt = date('d.m.y');
            //updating Account
            account::where('acno', $acno)->update([
                "ammount" => $newamnt
            ]);

            //Updating Transaction Account
            $ob = new tran();
            $ob->acno = $acno;
            $ob->ammount = $ammount;
            $ob->date = $dt;
            $ob->des = "Deposit";
            $ob->save();

            return view('deposit', ["msg" => "Ammount Deposited  = ₹" . $ammount . " And Current Ammount =₹" . $newamnt]);
        } else
            return view('deposit', ["msg" => ""]);
    }

    //withdrawl
    public function withdrawl(Request $req)
    {
        if ($req->input('submit')) {
            $acno = session("myses")["acno"];
            $ammount = $req->input('ammount');
            $data = account::where('acno', $acno);
            $data = $data->first()->toArray();
            $dt = date('d.m.y');

            //Updating Account
            if ($data['ammount'] > $ammount) {
                $newamnt = $data['ammount'] - $ammount;
                account::where('acno', $acno)->update([
                    "ammount" => $newamnt
                ]);

                //Updating Transaction Account
                $ob = new tran();
                $ob->acno = $acno;
                $ob->ammount = $ammount;
                $ob->date = $dt;
                $ob->des = "Deposit";
                $ob->save();

                return view('withdrawl', ["msg" => "Ammount Withdraw = ₹" . $ammount . " And Current Ammount = ₹" . $newamnt]);
            } else
                return view('withdrawl', ["msg" => " Insufficent Balance"]);
        } else
            return view('withdrawl', ["msg" => ""]);
    }

    //Changing Pin
    public function pinchange(Request $req)
    {
        if ($req->input('submit')) {
            $acno = session("myses")["acno"];
            $oldpin = $req->input('op');
            $newpin = $req->input('np');
            $data = account::where('acno', $acno)->get();
            $data = $data->first()->toArray();
            if ($oldpin == $data["pin"]) {
                if ($newpin == $oldpin) {
                    return view('pinchange', ["msg" => "This is your old pin enter new pin"]);
                } else {
                    account::where('acno', $acno)->update([
                        "pin" => $newpin
                    ]);
                    return view('pinchange', ["msg" => "Pin changed Successfully"]);
                }
            } else {
                return view('pinchange', ["msg" => "Incorrect Old Pin, Try Again"]);
            }
        } else
            return view('pinchange', ["msg" => ""]);
    }

    //Fund Transfer
    public function fundTransfer(Request $req)
    {
        if ($req->input('submit')) {
            $sacno = session('myses')['acno'];        //Sender Account Number
            $racno = $req->input('racno');            //Reciever Account Number
            $ammount = $req->input('ammount');        //Sending Ammount

            $sdata = account::where('acno', $sacno)->get();    //Getting Sender Data
            $sdata = $sdata->first()->toArray();

            $rdata = account::where('acno', $racno)->get();    //Getting Receiver Data
            $rdata = $rdata->first()->toArray();

            if ($sdata['ammount'] > $ammount) {
                $samnt = $sdata['ammount'] - $ammount;
                $ramnt = $rdata['ammount'] + $ammount;
                $dt = date('d.m.y');

                account::where('acno', $sacno)->update([         //Updating Sender Account
                    "ammount" => $samnt
                ]);
                account::where('acno', $racno)->update([         //Updating Reciever Account
                    "ammount" => $ramnt
                ]);

                //updating transaction account of sender
                $ob = new tran();
                $ob->acno = $sacno;
                $ob->ammount = $ammount;
                $ob->des = "transfer";
                $ob->date = $dt;
                $ob->save();

                //updating transaction account of receiver
                $ob = new tran();
                $ob->acno = $racno;
                $ob->ammount = $ammount;
                $ob->des = "receive";
                $ob->date = $dt;
                $ob->save();
                return view('fundtransfer', ["msg" => "Ammount Transfered = ₹" . $ammount . "And Current Ammount = ₹" . $samnt]);
            } else {
                return view('fundtransfer', ["msg" => "Insufficient Ammount"]);
            }
        } else
            return view('fundtransfer', ["msg" => ""]);
    }
    public function balanceEnquiry(Request $req)
    {
        $acno = session("myses")["acno"];
        $data = account::where('acno', $acno)->get();
        $data = $data->first()->toArray();
        $balance = $data['ammount'];
        return view('balanceenquiry', ["msg" => "₹" . $balance]);
    }

    //Account Summary
    public function accountSummary(Request $req)
    {
        $acno = session('myses.acno');
        
        $query = tran::where('acno', $acno);
    
        // Filter by month if provided
        if ($req->has('month') && $req->month != '') {
            $query->whereRaw("MONTH(STR_TO_DATE(SUBSTRING_INDEX(date, '.', 2), '%d.%m')) = ?", [$req->month]);
        }
    
        // Get the number of records to show if provided
        if ($req->has('number') && $req->number != '') {
            $limit = $req->input('number');
            $data = $query->limit($limit)->get();
        } else {
            // If no 'number' parameter is provided, retrieve all records
            $data = $query->get();
        }
    
        return view('accountsummary', ['msg' => $data]);
    }
    

//My account summary code:

    // public function accountSummary(Request $req)
    // {
    //     $acno = session('myses')['acno'];
        
    //     $data=tran::where('acno',$acno)->get();
    //     $data=$data->toArray();
    //     return view('accountsummary',["msg"=>$data]);
    // }
    
    public function login(Request $req)
    {
        if ($req->input('submit')) {
            $acno = $req->input('acno');
            $pin = $req->input('pin');
            $dt = account::where('acno', $acno)->where('pin', $pin)->get();
            if (sizeof($dt) > 0) {
                $dt = $dt->first()->toArray();     // Since get() returns a collection, you can use first() to get the first record as a model instance.
                $name = $dt['name'];
                $req->session()->put(array("myses" => array("name" => $name, "acno" => $dt['acno'])));
                return redirect('/');
            } else
            return back()->with('error', 'Invalid credentials')->onlyInput('email');
        } else
            return view('login');
    }
    public function logOut(Request $req)
    {
        $req->session()->flush();
        return redirect('/login');
    }
}

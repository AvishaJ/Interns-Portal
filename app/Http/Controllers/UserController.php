<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

        $user = User::where('is_admin',0)->get();
        return view('user.index', compact('user'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// Handle File Upload
        // if($request->hasFile('resume')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('resume')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('resume')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('resume')->storeAs('uploads/', $fileNameToStore);

        // }

        $User = new User();
        $file=$request->resume;
        $filename='Resume'.time().'.'.$file->getClientOriginalExtension();
        $request->resume->move('uploads',$filename);

        $User->Uname=$request->input("uname");
        $User->adr=$request->input("adr");
        $User->email=$request->input("email");
        $User->age=$request->input("age");
        $User->dob=$request->input("dob");
        $User->gender=$request->input("gender");
        $User->phno=$request->input("phno");
        $User->exp=$request->input("exp");
        //$User->resume = $fileName;
        $User->resume=$filename;
        $User->save();

        return ("data inserted");

       // return redirect('/posts')->with('success', 'Post Created');

        // Handle File Upload

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $item=User::find($id);
        return view('user.view',compact('item'));
    }
    public function select(Request $request)
    {

    $item = User::find($request->id);
    $item->flag = 1;
    // dd($item);
    $item->update();

    $email=$item->email;
    $status="selected";
    $name=$item->uname;
    $data = array('name' => $name, "email" => $email,"status"=>$status);
        Mail::send('user.TestMail', $data, function($message) use ($name, $email) {
            $message->to($email, $name)
            ->subject('Congratulation!!..' .$name.'you have been selected');
            $message->from('forsendingemails814@gmail.com','Interns');
        });

    // DB::table('users')
    //         ->update(['flag' =>0 ]);

    //         $request->session()->flash('Msg', 'Successfully Updated !!');

            return redirect('/display');
    }

    public function reject(Request $request)
    {
        $item = User::find($request->id);
        $item->flag = 0;
        $item->update();

        $email=$item->email;
        $status="rejected";
        $name=$item->uname;
        $data = array('name' => $name, "email" => $email,"status"=>$status);
        Mail::send('user.TestMail', $data, function($message) use ($name, $email) {
            $message->to($email, $name)
            ->subject('Sorry!!.. '.$name.' You have been Rejected');
            $message->from('forsendingemails814@gmail.com','Interns');      
        });
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

   
}

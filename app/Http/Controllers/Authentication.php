<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Admins;
use Illuminate\Http\Request;
use Hash;
use Session;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
class Authentication extends Controller
{
    public function login(){
        return "login";
    }
    public function registration(){
        return"signup";
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Bloodgroup'=>'required',
            'Email'=>'required|email|unique:users',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            'Usertype'=>'required',
            'Photo'=>'required'

        ]);
       
        $users=new Users();
        $users->Name=$request->Name;
        $users->Age=$request->Age;
        $users->Bloodgroup=$request->Bloodgroup;
        $users->Email=$request->Email;
        $users->Number=$request->Number;
        $users->Password=Hash::make($request->Password);
        $users->Address=$request->Address;
        $users->Usertype=$request->Usertype;
        if(($request->hasfile('Photo'))){
        
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assests/users/', $filename);
            $users->Photo=$filename;   
        }
        
        $res=$users->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()-> with('fail', 'Something went wrong');
        }
    }
    public function loginUser(Request $request){
        session()->regenerate();
        $request->validate([
            'Email'=>'required|email',
            'Password'=>'required|min:5|max:12',
        ]);
        $users= Users::where('email','=',$request->Email)->first();
        if($users){
        if(Hash::check($request->Password,$users->Password)){
            // if(auth()->user()->Usertype == "Donor"){
            //     return redirect('recipients');
            //     }else{
            //     return redirect('donors');
            //     }
            $sessionData = [
                'loginId' => $users['id'],
                'email' => $users['Email'],
                'name'  => $users['Name'],
                'logged' => TRUE,
                
            ];
       
            session($sessionData);
            //$request->session()->put('loginId', $users->id);
            if ($users["Usertype"]=='Donor'){
                return redirect('donor/recipients');
            }
            return redirect('recipients/donors');
        }else{
            return back()-> with('fail', 'Password not match '); 
        }
        }else{
            return back()-> with('fail', 'This email is not registered '); 
        }
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
    public function registerAdmin(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Email'=>'required|email|unique:admins',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            'Photo'=>'required'
            

        ]);
       
        $users=new Admins();
        $users->Name=$request->Name;
        $users->Age=$request->Age;
        $users->Email=$request->Email;
        $users->Number=$request->Number;
        $users->Password=Hash::make($request->Password);
        $users->Address=$request->Address;
        if(($request->hasfile('Photo'))){
        
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assests/users/', $filename);
            $users->Photo=$filename;   
        }
        
        $res=$users->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()-> with('fail', 'Something went wrong');
        }
    }
    public function loginAdmin(Request $request){
        session()->regenerate();
        $request->validate([
            'Email'=>'required|email',
            'Password'=>'required|min:5|max:12',
        ]);
        
        $users= Admins::where('email','=',$request->Email)->first();
        if($users){
        if(Hash::check($request->Password,$users->Password)){
             $sessionData = [
                 'loginId' => $users['id'],
                'email' => $users['Email'],
                 'name'  => $users['Name'],
                'logged' => TRUE,
                
            ];
       
            session($sessionData);
            //$request->session()->put('loginId', $users->id);
            if ($users["Email"]=='admin@gmail.com'){
                return redirect('admin/mainadmin/profile');
            }else{
            //$request->session()->put('loginId', $users->id);
            return redirect('admin/profile');
            }
            // if(auth()->user()->Usertype == "Donor"){
            //     return redirect('recipients');
            //     }else{
            //     return redirect('donors');
            //     }
            
        }else{
            return back()-> with('fail', 'Password not match '); 
        }
        }else{
            return back()-> with('fail', 'This email is not registered '); 
        }
    }
    public function edit(){
        // $user = Admins::find($id);
        $user = ['user' => DB::table('admins')-> where ('id', session('loginId'))->first()];
        // $user=auth()->user();
        // $data['user']=$user;
        return view('/admin/profile', $user);
        
      }
      
      public function update(Request $request ){
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Email'=>'required|email|',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            //'Photo'=>'required'
            

        ]);
        //$user=update Admins();
        
        $user=Admins::find(session('loginId'));

        $user->Name=$request->Name;
        $user->Age=$request->Age;
        $user->Email=$request->Email;
        $user->Number=$request->Number;
        $user->Password=Hash::make($request->Password);
        $user->Address=$request->Address;
        
        if(($request->hasfile('Photo')))
        {
            $destination = 'assests/users/'.$user->Photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assests/users/', $filename);
            $user->Photo=$filename;   
        }
        $user->update();
        return redirect('admin/profile');
    
        
      }
      public function edit1(){
        // $user = Admins::find($id);
        $user = ['user' => DB::table('admins')-> where ('id', session('loginId'))->first()];
        // $user=auth()->user();
        // $data['user']=$user;
        return view('/admin/mainadmin/profile', $user);
        
      }
      
      public function update1(Request $request ){
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Email'=>'required|email|',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            //'Photo'=>'required'
            

        ]);
        //$user=update Admins();
        
        $user=Admins::find(session('loginId'));

        $user->Name=$request->Name;
        $user->Age=$request->Age;
        $user->Email=$request->Email;
        $user->Number=$request->Number;
        $user->Password=Hash::make($request->Password);
        $user->Address=$request->Address;
        
        if(($request->hasfile('Photo')))
        {
            $destination = 'assests/users/'.$user->Photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assests/users/', $filename);
            $user->Photo=$filename;   
        }
        $user->update();
        return redirect('admin/mainadmin/profile');
    
        
      }
      
      
      public function edit2(){
        // $user = Admins::find($id);
        $user = ['user' => DB::table('users')-> where ('id', session('loginId'))->first()];
        // $user=auth()->user();
        // $data['user']=$user;
        return view('/donor/profile', $user);
        
      }
      
      public function update2(Request $request ){
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Bloodgroup'=>'required',
            'Email'=>'required|email|',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            //'Usertype'=>'required',
            //'Photo'=>'required'
            

        ]);
        //$user=update Admins();
        
        $user=Users::find(session('loginId'));
        $user->Name=$request->Name;
        $user->Age=$request->Age;
        $user->Bloodgroup=$request->Bloodgroup;
        $user->Email=$request->Email;
        $user->Number=$request->Number;
        $user->Password=Hash::make($request->Password);
        $user->Address=$request->Address;
       // $users->Usertype=$request->Usertype;
        
        if(($request->hasfile('Photo')))
        {
            $destination = 'assests/users/'.$user->Photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assests/users/', $filename);
            $user->Photo=$filename;   
        }
        $user->update();
        return redirect('donor/profile');
    
        
    
      }
      public function edit3(){
        // $user = Admins::find($id);
        $user = ['user' => DB::table('users')-> where ('id', session('loginId'))->first()];
        // $user=auth()->user();
        // $data['user']=$user;
        return view('/recipients/profile', $user);
        
      }
      public function update3(Request $request ){
        $request->validate([
            'Name'=>'required',
            'Age'=>'required',
            'Bloodgroup'=>'required',
            'Email'=>'required|email|',
            'Number'=>'required',
            'Password'=>'required|min:5|max:12',
            'Address'=>'required',
            //'Usertype'=>'required',
            //'Photo'=>'required'
            

        ]);
        
        
        $user=Users::find(session('loginId'));
        $user->Name=$request->Name;
        $user->Age=$request->Age;
        $user->Bloodgroup=$request->Bloodgroup;
        $user->Email=$request->Email;
        $user->Number=$request->Number;
        $user->Password=Hash::make($request->Password);
        $user->Address=$request->Address;
        //$users->Usertype=$request->Usertype;
        
        if(($request->hasfile('Photo')))
        {
            $destination = 'assests/users/'.$user->Photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('Photo');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assests/users/', $filename);
            $user->Photo=$filename;   
        }
        $user->update();
        return redirect('recipients/profile');
    
        
      }
    
}

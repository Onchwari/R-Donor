<?php

namespace App\Http\Controllers;
use App\Models\Blooddrives;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Addblooddrives extends Controller
{
    public function addDrive(Request $request)
    {
        $request->validate([
            'Instituition'=>'required',
            'Time'=>'required',
            'Date'=>'required',
            'Address'=>'required',
            'Photo'=>'required'

        ]);
       
        $users=new Blooddrives();
        $users->Instituition=$request->Instituition;
        $users->Time=$request->Time;
        $users->Date=$request->Date;
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

    public function viewDrives(){
        $user = DB::table('blooddrives')->get();
        
        return view('admin/blooddrives',compact('user'));
        }
        public function viewDrives1(){
            $user = DB::table('blooddrives')->get();
            
            return view('admin/mainadmin/blooddrives',compact('user'));
            }
            public function displayDrives(){
                $user = DB::table('blooddrives')->get();
                
                return view('/blooddrives',compact('user'));
                }
            public function delete($id){
                 $user = Blooddrives::find($id);
                 $user->delete();  
                return redirect('/admin/blooddrives')->with('status', "Data deleted Successfully");
                }
                 public function delete1($id){
                     $user = Blooddrives::find($id);
                    $user->delete();  
                    return redirect('/admin/mainadmin/blooddrives')->with('status', "Data deleted Successfully");
                   }
                   public function edit($id){
                    $user = Blooddrives::find($id);
                    return view('/admin/edit',compact('user'));
                    
                  }
                  public function update(Request $request,$id){
                    $user = Blooddrives::find($id);
                    $user->Instituition= $request->Instituition;
                    $user->Time=$request->Time;
                    $user->Date=$request->Date;
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
                    return redirect('admin/blooddrives');
                    
                  }
                  public function edit1($id){
                    $user = Blooddrives::find($id);
                    return view('/admin/edit',compact('user'));
                    
                  }
                  public function update1(Request $request,$id){
                    $user = Blooddrives::find($id);
                    $user->Instituition= $request->Instituition;
                    $user->Time=$request->Time;
                    $user->Date=$request->Date;
                    $user->Address=$request->Address;
                    if(($request->hasfile('Photo'))){
                        $destination='assests/users/'.$user->Photo;
                        if(File::exists($destination)){
                            File::delete($destination);
                        }
                        $file=$request->file('Photo');
                        $ext=$file->getClientOriginalExtension();
                        $filename = time(). '.'.$ext;
                        $file->move('assests/users/', $filename);
                        $user->Photo=$filename;   
                    }
                    $user->update();
                    return redirect('admin/mainadmin/blooddrives');
                    
                  }

}

<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Admins;
use App\Models\Requests;
use post;
use session;
use Illuminate\Http\Request;

use DB;

class ViewUsers extends Controller
{
    public function viewAdmin(){
        $user = DB::table('admins')->get();
        
        return view('admin/mainadmin/admin',compact('user'));
        }
    public function viewRequests(){
            $user = DB::table('requests')
            ->get();
            
            return view('admin/requests',compact('user'));
            }

    public function viewRequests1(){
            $user = DB::table('requests')
            ->get();
            
            return view('admin/mainadmin/requests',compact('user'));
            }
    public function deletereq($id){
            $user = Requests::find($id);
            $user->delete();  
            return redirect('/admin/requests')->with('status', "Data deleted Successfully");
            } 
    public function deletereq1($id){
                $user = Requests::find($id);
                $user->delete();  
                return redirect('/admin/mainadmin/requests')->with('status', "Data deleted Successfully");
                }   
    public function viewDonors(){
        $user = DB::table('users')
        ->where('Usertype', '=', 'Donor')->get();
        
        return view('admin/donors',compact('user'));
        }
        public function viewRecipients(){
            $user = DB::table('users')
            ->where('Usertype', '=', 'Recipient')->get();
            
            return view('admin/recipients',compact('user'));
            }
        public function viewDonors1(){
            $user = DB::table('users')
            ->where('Usertype', '=', 'Donor')->get();
                
            return view('admin/mainadmin/donors',compact('user'));
        }
                public function viewRecipients1(){
                    $user = DB::table('users')
                    ->where('Usertype', '=', 'Recipient')->get();
                    
                    return view('admin/mainadmin/recipients',compact('user'));
                    }
                    public function displayDonors(){
                        // $Address = DB::table('users')->select('Address')->where('Usertype', '=', 'Donor')->distinct()->get()->pluck('Address')->sort();
                        // $user =Users::query(DB::table('users')
                        // ->where('Usertype', '=', 'Donor'));
                        // if($request->filled('Address')){
                        //     $user->where('Address',$request->Address);
                        // }
                        // return view('recipients/donors',[
                        //     'Address'=>$Address,
                        //     'users'=>$user->get(),]);
                        $user = DB::table('users')
                        ->where('Usertype', '=', 'Donor')->get();
                        
                        return view('recipients/donors',compact('user'));
                        }
                        // public function store(){
                        //     return $request->all();
                        //     return view('recipients/donors');
                        // }
                        public function donorAplus(){
                            $user = DB::table('users')
                            ->where('Usertype', '=', 'Donor')
                                ->where('Bloodgroup', '=', 'A+')->get();
                            
                            return view('recipients/bloodgroups/A+',compact('user'));
                            }
                            public function donorAminus(){
                                $user = DB::table('users')
                                ->where('Usertype', '=', 'Donor')
                                ->where('Bloodgroup', '=', 'A-')->get();

                                
                                return view('recipients/bloodgroups/A-',compact('user'));
                                }
                                public function donorBplus(){
                                    $user = DB::table('users')
                                    ->where('Usertype', '=', 'Donor')
                                     ->where('Bloodgroup', '=', 'B+')->get();
                                    
                                    return view('recipients/bloodgroups/B+',compact('user'));
                                    }
                                    public function donorBminus(){
                                        $user = DB::table('users')
                                        ->where('Usertype', '=', 'Donor')
                                        ->where('Bloodgroup', '=', 'B-')->get();
                                        
                                        return view('recipients/bloodgroups/B-',compact('user'));
                                        }
                                        public function donorABplus(){
                                            $user = DB::table('users')
                                            ->where('Usertype', '=', 'Donor')
                                            ->where('Bloodgroup', '=', 'AB+')->get();
                                            
                                            return view('recipients/bloodgroups/AB+',compact('user'));
                                            }
                                            public function donorABminus(){
                                                $user = DB::table('users')
                                                ->where('Usertype', '=', 'Donor')
                                                ->where('Bloodgroup', '=', 'AB-')->get();
                                                
                                                return view('recipients/bloodgroups/AB-',compact('user'));
                                                }
                        public function donorOplus(){
                            $user = DB::table('users')
                            ->where('Usertype', '=', 'Donor')
                                        ->where('Bloodgroup', '=', 'O+')->get();
                            
                            return view('recipients/bloodgroups/O+',compact('user'));
                            }
                            public function donorOminus(){
                                $user = DB::table('users')
                                ->where('Usertype', '=', 'Donor')
                                        ->where('Bloodgroup', '=', 'O-')->get();
                                
                                return view('recipients/bloodgroups/O-',compact('user'));
                                }
                                public function displayRecipient(){
                                    $user = DB::table('users')
                                    ->where('Usertype', '=', 'Recipient')->get();
                                    
                                    return view('donor/recipients',compact('user'));
                                    }
                                    public function recipientAplus(){
                                        $user = DB::table('users')
                                        ->where('Usertype', '=', 'Recipient')
                                            ->where('Bloodgroup', '=', 'A+')->get();
                                        
                                        return view('donor/bloodgroups/A+',compact('user'));
                                        }
                                        public function recipientAminus(){
                                            $user = DB::table('users')
                                            ->where('Usertype', '=', 'Recipient')
                                            ->where('Bloodgroup', '=', 'A-')->get();
            
                                            
                                            return view('donor/bloodgroups/A-',compact('user'));
                                            }
                                            public function recipientBplus(){
                                                $user = DB::table('users')
                                                ->where('Usertype', '=', 'Recipient')
                                                 ->where('Bloodgroup', '=', 'B+')->get();
                                                
                                                return view('donor/bloodgroups/B+',compact('user'));
                                                }
                                                public function recipientBminus(){
                                                    $user = DB::table('users')
                                                    ->where('Usertype', '=', 'Recipient')
                                                    ->where('Bloodgroup', '=', 'B-')->get();
                                                    
                                                    return view('donor/bloodgroups/B-',compact('user'));
                                                    }
                                                    public function recipientABplus(){
                                                        $user = DB::table('users')
                                                        ->where('Usertype', '=', 'Recipient')
                                                        ->where('Bloodgroup', '=', 'AB+')->get();
                                                        
                                                        return view('donor/bloodgroups/AB+',compact('user'));
                                                        }
                                                        public function recipientABminus(){
                                                            $user = DB::table('users')
                                                            ->where('Usertype', '=', 'Recipient')
                                                            ->where('Bloodgroup', '=', 'AB-')->get();
                                                            
                                                            return view('donor/bloodgroups/AB-',compact('user'));
                                                            }
                                    public function recipientOplus(){
                                        $user = DB::table('users')
                                        ->where('Usertype', '=', 'Recipient')
                                                    ->where('Bloodgroup', '=', 'O+')->get();
                                        
                                        return view('donor/bloodgroups/O+',compact('user'));
                                        }
                                        public function recipientOminus(){
                                            $user = DB::table('users')
                                            ->where('Usertype', '=', 'Recipient')
                                                    ->where('Bloodgroup', '=', 'O-')->get();
                                            
                                            return view('donor/bloodgroups/O-',compact('user'));
                                            }
        public function delete($id){
            $user = Users::find($id);
            $user->delete();  
            return redirect('/admin/donors')->with('status', "Data deleted Successfully");
        }    
        public function delete1($id){
            $user = Users::find($id);
            $user->delete();  
            return redirect('/admin/recipients')->with('status', "Data deleted Successfully");
        }  
        public function delete2($id){
            $user = Users::find($id);
            $user->delete();  
            return redirect('/admin/mainadmin/donors')->with('status', "Data deleted Successfully");
        }
        public function delete3($id){
            $user = Users::find($id);
            $user->delete();  
            return redirect('/admin/mainadmin/recipients')->with('status', "Data deleted Successfully");
        }   
        public function delete4($id){
            $user = Admins::find($id);
            $user->delete();  
            return redirect('/admin/mainadmin/admin')->with('status', "Data deleted Successfully");
        }  
        public function sendRequest($id)
        {
            $userCount = Users::where('id', $id)->count();
            if($userCount>0){
            $recipientId=session('loginId');
            $donorId = $id;
            $Requests=new Requests;
            $Requests->donorId=$donorId;
            $Requests->recipientId=$recipientId;
            $Requests->save();

                //echo" friend Request to" . $id;die;
                return redirect('recipients/donors')->with('status', "Data deleted Successfully");
            }else{
                abort(404);
            }
        }
        public function displayRequests(){
            
            $user = DB::table('requests')
            ->join('users', 'users.id', '=', 'requests.donorId')
            ->where('recipientId', '=', session('loginId'))->get();
            
            return view('recipients/requests',compact('user'));
        } 
        public function displayResponses(){
            $user = DB::table('requests')
            ->join('users', 'users.id', '=', 'requests.recipientId')
            ->where('donorId', '=', session('loginId'))
            ->where('status', '=', 'pending')
            ->get();
            
            return view('donor/requests',compact('user'));

            // $donorId = session('loginId');
            // $user = Requests::where('donorId', $donorId)->get();
            // $user = json_decode(json_encode($user));
            // return view('donor/requests',compact('user'));
            // //echo "<pre>";print_r($displayResponses); die;

        }
        public function acceptRequest($id){
          $donorId= session('loginId');
          Requests::where(['recipientId'=>$id, 'donorId'=>$donorId])->update(['status'=>'confirmed']);
          return redirect()->back()->with('flash message success','Request Successfully accepted');
        }  
        public function rejectRequest($id){
            $donorId= session('loginId');
            Requests::where(['recipientId'=>$id, 'donorId'=>$donorId])->update(['status'=>'rejected']);
            return redirect()->back()->with('flash message success','Request Successfully accepted');
          }                  
}

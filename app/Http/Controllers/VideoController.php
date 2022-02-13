<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{

    public function showVideoWelcomeInvest()

    {
      $videos=array();
      $videoInvest=array();

        $data=Video::all();
       
         
       
         $i=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"الإستثمار في الذهب")==0)
                {
                   $videoInvest[$i]=$video;
                   $i++;
                }
             
            }
         $videos=$videoInvest;
         $type=1;
         if($videos==null)
         return view ('noList-video-welcome',compact('videos','type'));
         else
            return view ('list-video-welcome',compact('videos','type'));
                     
        
       
       
    }
    
    public function showVideoWelcomeBudget()

    {
        $videos=array();
        $videoBudget=array();
        $data=Video::all();
       
        
         $j=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"التصرف في الميزانية")==0)
                {
                    $videoBudget[$j]=$video;
                   $j++;
                    
                }
                
            }
            $videos=$videoBudget;
            $type=2;
            if($videos==null)
            return view ('noList-video-welcome',compact('videos','type'));
            else
            return view ('list-video-welcome',compact('videos','type'));
                     
        
       
       
    }
    public function showVideoWelcomeMoney()

    {
        $videos=array();
        $videoMoney=array();
        $data=Video::all();
        
         $k=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"تجلي المال")==0)
                {
                    $videoMoney[$k]=$video;
                    $k++; 
                        
                }
                
            }
                $videos=$videoMoney;
                $type=3;
           
            if($videos==null)
            return view ('noList-video-welcome',compact('videos','type'));
            else   
            return view ('list-video-welcome',compact('videos','type'));
              
              
        
       
       
    }
    public function showVideoWelcomePlay()

    {
        $videos=array();
        $videoPlay=array();
        $data=Video::all();
        
         $l=0;
            foreach($data as $video)
            {
               
                if(strcmp($video->type,"لعبة الإستثمار")==0)
                {
                    $videoPlay[$l]=$video;
                    $l++; 
                   
                }
            
                
            }
            $videos=$videoPlay;
            $type=4;
            if($videos==null)
            return view ('noList-video-welcome',compact('videos','type'));
            else    
            return view ('list-video-welcome',compact('videos','type'));
                     
        
       
       
    }

    
    public function showVideoHomeInvest()

    {
        $videos=array();
        $videoInvest=array();
        $data=Video::all();
        
         $i=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"الإستثمار في الذهب")==0)
                {
                    $videoInvest[$i]=$video;
                    $i++; 
                   
                }
             
            }
            
            $videos=$videoInvest;
            $type=1;
         if($videos==null)
         return view ('noList-video-home',compact('videos','type'));
         else
            return view ('list-video-home',compact('videos','type'));
       
       
    }
    
    public function showVideoHomeBudget()

    {
        $videos=array();
      $videoBudget=array();
        $data=Video::all();
     
         $j=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"التصرف في الميزانية")==0)
                {
                    $videoBudget[$j]=$video;
                    $j++;
                     
                  
                }
                
            }
            $videos=$videoBudget;
            $type=2;
            if($videos==null)
            return view ('noList-video-home',compact('videos','type'));
            else
            return view ('list-video-home',compact('videos','type'));
                     
       
       
    }
    public function showVideoHomeMoney()

    {
        $videos=array();
        $videoMoney=array();
        $data=Video::all();
      
         $k=0;
            foreach($data as $video)
            {
                if(strcmp($video->type,"تجلي المال")==0)
                {
                    $videoMoney[$k]=$video;
                    $k++; 
                        
                  
                }
                
            }
            
              
            $type=3;
            $videos=$videoMoney;
            if($videos==null)
            return view ('noList-video-home',compact('videos','type'));
            else   
            return view ('list-video-home',compact('videos','type'));
             
       
       
    }
    public function showVideoHomePlay()

    {
        $videos=array();
      $videoPlay=array();
        $data=Video::all();
     
         $l=0;
            foreach($data as $video)
            {
               
                if(strcmp($video->type,"لعبة الإستثمار")==0)
                {
                    $videoPlay[$l]=$video;
                    $l++; 
                   
                }
            
                
            }
            
            $videos=$videoPlay;
            $type=4;
            if($videos==null)
            return view ('noList-video-home',compact('videos','type'));
            else    
            return view ('list-video-home',compact('videos','type'));
                     
       
       
    }
    public function showDataVideo($id){
        
        $vInvest=array();
        $vBudget=array();
        $vMoney=array();
        $vPlay=array();

        $video= Video::find($id);
     
        $videos=Video::all();
        $i=0;
        $j=0;
        $k=0;
        $l=0;
        foreach($videos as $v)
        {
         if(strcmp($v->type,"الإستثمار في الذهب")==0 && $v->id!=$video->id)
         {
            $vInvest[$i]=$v;
            $i++;
         }
         if(strcmp($v->type,"التصرف في الميزانية")==0 && $v->id!=$video->id)
         {
            $vBudget[$j]=$v;
            $j++;
         }
         if(strcmp($v->type,"تجلي المال")==0 && $v->id!=$video->id)
         {
            $vMoney[$k]=$v;
            $k++;
         }
         if(strcmp($v->type,"لعبة الإستثمار")==0 && $v->id!=$video->id)
         {
            $vPlay[$l]=$v;
            $l++;
         }
        }
         if(strcmp($video->type,"الإستثمار في الذهب")==0)
         {
            $type=1;
            $videos=$vInvest;
         }
       
         if(strcmp($video->type,"التصرف في الميزانية")==0)
         {
            $type=2;
            $videos=$vBudget;
         }
      
         if(strcmp($video->type,"تجلي المال")==0)
         {
            $type=3;
            $videos=$vMoney; 
         }
       
         if(strcmp($video->type,"لعبة الإستثمار")==0)
     
         {
            $type=4;
            $videos=$vPlay;
         }
        
        return view('single-video',compact('video','videos','type'));
  
  
    }

    public function addVideo()
    {
       return view('add-video');
    }

    public function addVideoSubmit(request $req)
    {

        $video= new Video;
      
        
        
        $vdo=$req->file('file');
       
       
        $videoName=time().'.mp4';
        $vdo->move(public_path('videos'),$videoName);
  
       
       
        $video->nom=$req->name;
    
       $video->vdo=$videoName;
       $video->type=$req->type;

      
   $video->save();

   $videos=Video::all();
  
   return view('list-video-welcome',compact('videos'));

      
    }

}

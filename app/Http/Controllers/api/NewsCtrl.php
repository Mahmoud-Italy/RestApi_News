<?php

namespace App\Http\Controllers\api;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class NewsCtrl extends Controller
{
    public function index(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
    	$orderby_Date = 'asc';
    	$orderby_Title = 'asc';
    	$per_page = 10;
    	$page = 1;
    	$total = News::count();
    	$data = array();
         
        #sortable via Date
    	if($request->input('orderBy_date')) {
    		if($request->input('orderBy_date') == 'asc' || $request->input('orderBy_date') == 'desc') {
    			$orderby_Date = $request->input('orderBy_date');
    		}
    	}
        
        #sortable via Title
    	if($request->input('orderBy_title')) {
    		if($request->input('orderBy_title') == 'asc' || $request->input('orderBy_title') == 'desc') {
    			$orderby_Title = $request->input('orderBy_title');
    		}
    	}

    	#get pagination
    	if($request->input('page') && is_numeric($request->input('page'))) {
    		$page = $request->input('page');
    	}
    	
	    	try {
	    		$data = \DB::table('news as n')
	    		         ->select('n.id','cat.title as cat_name','n.title','n.short_content',
	    		         	\DB::raw('DATE(n.created_at) as date'))
	    		         ->leftjoin('categories as cat', 'n.cat_id','=','cat.id')
	    		         ->orderBy('n.created_at',$orderby_Date)
	    		         ->orderBy('n.title',$orderby_Title)
	    		         ->paginate($per_page)->getCollection();
	    		$code = 200;
	    		$status = true;
	    		 if(count($data) == 0) {
	    		     $message = 'No data found.';
	    		     $status = false;
	    		 }
	    	} catch (\Exception $e) {
	    			$message = 'Something went wrong.';
	    	}

	    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message,
	    		                               'current_page'=>intval($page),'per_page'=>$per_page,
	    		                               'total_data'=>$total,'data'=>$data]);
    }



    public function show(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
    	$data = array();
        $news_id = $request->input('news_id');
    	
    	#Validations
    	if(!$news_id) {
    		$message = 'Missing parameters.';
    	} else if (News::where('id',$news_id)->count() == 0) {
            $message = 'News id not found.';
    	} else {
    		try {
    			    $data = \DB::table('news as n')
	    		         ->select('n.id','cat.title as cat_name','n.title','n.short_content','n.long_content',
	    		         	\DB::raw('DATE(n.created_at) as date'))
	    		         ->leftjoin('categories as cat', 'n.cat_id','=','cat.id')
	    		         ->where('n.id',$news_id)->first();
    			$code = 200;
    			$status = true;
    			$message = 'News id found Successfully.';
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message,'data'=>$data]);
    }



    public function create(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
    	$cat_id = $request->input('cat_id');
        $title = $request->input('title');
        $short_content = $request->input('short_content');
        $long_content = $request->input('long_content');
        
        #Validations
    	if(!$title || !$cat_id) {
    		$message = 'Field title required.';
    	} else if (Category::where('id',$cat_id)->count() == 0) {
    		$message = 'No Category id found.';
    	} else {
    		try {
    			$row = new News;
    			$row->cat_id = $cat_id;
    			$row->title = $title;
    			$row->short_content = $short_content;
    			$row->long_content = $long_content;
    			$row->save();
    			$code = 200;
    			$status = true;
    			$message = 'News Added Successfully.';
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message]);
    }



    public function update(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
        $news_id = $request->input('news_id');
        $cat_id = $request->input('cat_id');
        $title = $request->input('title');
        $short_content = $request->input('short_content');
        $long_content = $request->input('long_content');
    	
    	#Validations
    	if(!$news_id || !$cat_id) {
    		$message = 'Missing parameters.';
    	} else if (Category::where('id',$cat_id)->count() == 0) {
            $message = 'Category id not found.';
    	} else if (News::where('id',$news_id)->count() == 0) {
            $message = 'News id not found.';
    	} else {
    		try {
    			
    			#Update Only data returned
    			$row = News::find($news_id);
	                if($cat_id) { $row->cat_id = $cat_id; }
	    			if($title) { $row->title = $title; }
			        if($short_content) { $row->short_content = $short_content; }
			        if($long_content) { $row->long_content = $long_content; }
    			$row->save();
    			$code = 200;
    			$status = true;
    			$message = 'News Updated Successfully.';
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message]);
    }


    public function destroy(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
        $news_id = $request->input('news_id');
    	
    	#Validations
    	if(!$news_id) {
    		$message = 'Missing parameters.';
    	} else if (News::where('id',$news_id)->count() == 0) {
            $message = 'News id not found.';
    	} else {
    		try {
    			News::where('id',$news_id)->delete();
    			$code = 200;
    			$status = true;
    			$message = 'News Destroyed Successfully.';
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message]);
    }


    public function search(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
    	$data = array();
    	$orderby_Date = 'asc';
    	$orderby_Title = 'asc';
    	$per_page = 10;
    	$page = 1;
    	$search = $request->input('search');
    	$total = News::where('title','LIKE','%'.$search.'%')->count();

    	#sortable via Date
    	if($request->input('orderBy_date')) {
    		if($request->input('orderBy_date') == 'asc' || $request->input('orderBy_date') == 'desc') {
    			$orderby_Date = $request->input('orderBy_date');
    		}
    	}
        
        #sortable via Title
    	if($request->input('orderBy_title')) {
    		if($request->input('orderBy_title') == 'asc' || $request->input('orderBy_title') == 'desc') {
    			$orderby_Title = $request->input('orderBy_title');
    		}
    	}

    	#get pagination
    	if($request->input('page') && is_numeric($request->input('page'))) {
    		$page = $request->input('page');
    	}
    	
    	#Validations
    	if(!$search) {
    		$message = 'Missing parameters.';
    	} else {
    		try {       
    			$data = \DB::table('news as n')
    			           		->select('n.id','cat.title as cat_name','n.title','n.short_content',
    			           		\DB::raw('DATE(n.created_at) as date'))
    			                ->leftjoin('categories as cat', 'n.cat_id','=','cat.id')
    			                ->where('n.title','LIKE','%'.$search.'%')
    			                ->orderBy('n.created_at',$orderby_Date)
	    		        		->orderBy('n.title',$orderby_Title)
    			                ->paginate($per_page)->getCollection();
    			$code = 200;
    			$status = true;
    			if(count($data) == 0) {
    				$message = 'No Search found.';
    				$status = false;
    			}
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message,
	    		                               'current_page'=>intval($page),'per_page'=>$per_page,
	    		                               'total_data'=>$total,'data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers\api;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;

class CategoryCtrl extends Controller
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
    	$total = Category::count();
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
	    		$data = Category::select('id','title',\DB::raw('DATE(`created_at`) as date'))->orderBy('created_at',$orderby_Date)->orderBy('title',$orderby_Title)->paginate($per_page)->getCollection();
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
	    		                               'orderby_Date' => $orderby_Date, 'orderby_Title' => $orderby_Title,
	    		                               'current_page'=>intval($page),'per_page'=>$per_page,
	    		                               'total_data'=>$total,'data'=>$data]);
    }



    public function create(Request $request)
    {
    	#Providers
    	$code = 500;
    	$status = false;
    	$message = '';
        $title = $request->input('title');
        
        #Validations
    	if(!$title) {
    		$message = 'Field title required.';
    	} else {
    		try {
    			$row = new Category;
    			$row->title = $title;
    			$row->save();
    			$code = 200;
    			$status = true;
    			$message = 'Category Added Successfully.';
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
        $cat_id = $request->input('cat_id');
        $title = $request->input('title');
    	
    	#Validations
    	if(!$cat_id || !$title) {
    		$message = 'Missing parameters.';
    	} else if (Category::where('id',$cat_id)->count() == 0) {
            $message = 'Category id not found.';
    	} else {
    		try {
    			$row = Category::find($cat_id);
    			$row->title = $title;
    			$row->save();
    			$code = 200;
    			$status = true;
    			$message = 'Category Updated Successfully.';
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
        $cat_id = $request->input('cat_id');
    	
    	#Validations
    	if(!$cat_id) {
    		$message = 'Missing parameters.';
    	} else if (Category::where('id',$cat_id)->count() == 0) {
            $message = 'Category id not found.';
    	} else if (News::where('cat_id',$cat_id)->count()) {
            $message = 'Category has news related, please remove news first.';
    	} else {
    		try {
    			Category::where('id',$cat_id)->delete();
    			$code = 200;
    			$status = true;
    			$message = 'Category Destroyed Successfully.';
    		} catch (\Exception $e) {
    			$message = 'Something went wrong.';
    		}
    	}
    	return Response::json(['code'=>$code,'status'=>$status,'message'=>$message]);
    }



}

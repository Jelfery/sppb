<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\File;
use Carbon\Carbon;
use View;
use Auth;

class FileController extends Controller
{
	function __construct(){
		$this->middleware('auth');
	}

    public function index(){
    	// get all files
    	$files = File::with('user.hospital')->with('label')->get();

    	return View::make('bebankerja.index', compact('files'));
    }

    public function store(Request $request){

    	/*	
    	 *	1. validate if the file is exist or valid
    	 *	2. Check if the is exist in the storage
    	 *	3. Store@update file
    	 *	4. Update database
    	 */

    	// validate file is exist & in xls format
    	$this->validate($request, [
    		'file' => 'required|mimes:xls'
    		]);

    	$file = $request->file('file');

      	// Display File Name
    	echo 'File Name: '.$file->getClientOriginalName();
    	echo '<br>';

      	// Display File Extension
    	echo 'File Extension: '.$file->getClientOriginalExtension();
    	echo '<br>';

      	// Display File Real Path
    	echo 'File Real Path: '.$file->getRealPath();
    	echo '<br>';

      	// Display File Size
    	echo 'File Size: '.$file->getSize();
    	echo '<br>';

      	// Display File Mime Type
    	echo 'File Mime Type: '.$file->getMimeType();

      	// Move Uploaded File
    	$destinationPath = 'records';
    	$file->move($destinationPath,$file->getClientOriginalName());

    	return ('bebankerja.index');
    }

    public function checkFiles(){

    }
}

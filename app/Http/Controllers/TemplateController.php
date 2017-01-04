<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Label;
use App\Template;
use App\User;
use File;
use Carbon\Carbon;
use View;
use Auth;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
	function __construct(){
		$this->middleware('auth');
	}

    public function index(){

        $user = User::FindOrFail(Auth::user()->id);

    	// get all records in Template with Label
    	$files = Template::with('label')->get();

    	return View::make('templates.index', compact('files', 'user'));
    }

    public function store(Request $request){

    	// validate file is exist & in xls format
    	$this->validate($request, [
    		'file' => 'required',
    		'uploader' => 'required'
    		]);

        $label = Label::FindOrFail($request->label);

    	$file = $request->file('file');

        $filemime = $file->getMimeType();

        $uploader = $request->uploader;

        // dd($file);

        // check if user entered template name
        if (!empty($request->filename)) {
        
        	$filename = $request->filename.'.'.$file->getClientOriginalExtension();
        
        } else {
        	
        	$filename = $file->getClientOriginalName();
        }

      	// Move Uploaded File
    	$destinationPath = $label->name.'/'.$filename;

    	// $file->move($destinationPath,$file->getClientOriginalName());

        Storage::disk('upload')->put($destinationPath, File::get($file));

        Template::create([
            'name' => $filename,
            'uploader' => $uploader,
            'mime' => $filemime,
            'label_id' => $label->id
            ]);

    	return redirect ('template');
    }

    public function delete($id){

        $file = Template::with('label')->FindOrFail($id);

        $filename = $file->name;

        $file_path = storage_path('templates/'.$file->label->name.'/'.$filename);

        Template::destroy($id);

        if (file_exists($file_path)) {            

            File::delete($file_path);

            $messages = 'Fail berjaya dihapuskan';

            \Session::flash('file_success', $messages);

        } else {

            Template::destroy($id);

            $messages = 'Fail tiada dalam simpanan';

            \Session::flash('file_error', $messages);
        }

        return redirect ('template');
    }

    /*
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

    // assign new filename
    $filename = $request->filename.'.'.$file->getClientOriginalExtension();
    */
}

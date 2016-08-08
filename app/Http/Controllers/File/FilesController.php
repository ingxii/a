<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;

use App\Helpers\FilesManager;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


use App\Helpers\TaskList;
use App\Jobs\HardWork;


class FilesController extends Controller
{
    protected $manager;


    public function __construct(FilesManager $manager)
    {
        $this->manager = $manager;
        // $this->middleware('auth');
        // die("<p>111111111111111</p>");

        // abort(404);
        // abort(503);
        $this->result=[];
        $this->result['success'] = 1;
        $this->result['error'] = '';
    }

    public function index(Request $request)
    {
        // //
        // session(['key' => 1 + session('key')]);

        // $list = new TaskList();
        // $list->name= session('key');
        // $this->dispatch(new HardWork($list));


        // // 目录信息
        $folder = $request->get('folder');
        $data = $this->manager->folderInfo($folder);
        // dump($data);
        $this->result['folder'] = $data;

        // return response($folder);
        return response()->view('files', $data);
    }

    public function upload(Request $request)
    {
        $file = $_FILES['file'];
        $fileName = $request->get('file_name');
        $fileName = $fileName ?: $file['name'];
        $path = str_finish($request->get('folder'), '/') . $fileName;
        $content = File::get($file['tmp_name']);

        $result = $this->manager->saveFile($path, $content);

        if ($result === true) {
            return redirect()
                    ->back()
                    ->withSuccess("File '$fileName' uploaded.");
        }

        $error = $result ? : "An error occurred uploading file.";
        return redirect()
                ->back()
                ->withErrors([$error]);
    }


    public function delete(Request $request)
    {
        $del_file = $request->get('del_file');
        $path = $request->get('folder').'/'.$del_file;

        $result = $this->manager->deleteFile($path);

        if ($result === true) {
            return redirect()
                ->back()
                ->withSuccess("File '$del_file' deleted.");
        }

        $error = $result ? : "An error occurred deleting file.";
        return redirect()
                ->back()
                ->withErrors([$error]);
    }

    public function create_folder(Request $request)
    {
        $new_folder = $request->get('new_folder');
        $folder = $request->get('folder').'/'.$new_folder;

        $result = $this->manager->createDirectory($folder);

        if ($result === true) {
            return redirect()
                ->back()
                ->withSuccess("Folder '$new_folder' created.");
        }

        $error = $result ? : "An error occurred creating directory.";
        return redirect()
                ->back()
                ->withErrors([$error]);
    }

    public function delete_folder(Request $request)
    {
        //
    }

}

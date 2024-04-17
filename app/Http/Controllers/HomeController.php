<?php

namespace App\Http\Controllers;

use App\Mail\SubmitForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $folder = 'reports';
        $reports = [];
        $docPaths = glob(public_path($folder) . '/*');
        foreach ($docPaths as $docPath) {
            // Determine the file type based on its extension
            $extension = pathinfo($docPath, PATHINFO_EXTENSION);
            $type = '';
            switch ($extension) {
                case 'pdf':
                    $type = 'pdf';
                    break;
                case 'doc':
                case 'docx':
                    $type = 'word';
                    break;
                // Add more cases for other file types if needed
                default:
                    $type = 'other';
                    break;
            }

    // Add the report information to the reports array
        $reports[] = [
            'name' => basename($docPath),
            'path' => $folder . '/' . basename($docPath),
            'type' => $type,
        ];
    }

    return view('services', compact('reports'));

    }

    public function projects()
    {
        return view('projects');
    }
    
}

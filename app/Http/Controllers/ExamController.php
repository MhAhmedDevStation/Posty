<?php

namespace App\Http\Controllers;

use App\Exports\ExamResultExport;
use App\Imports\ExamResultImport;
use App\Models\ExamResult;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExamController extends Controller
{
    public function index()
    {
        // Fetch exam results data from the database
        $examResults = ExamResult::all();

        return view('exam.exam', ['examResults' => $examResults]);
    }


    public function processUpload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('excel_file');
        $file = $request->file('excel_file');
        // $data = Excel::toArray([], $file);
        // Use ExamResultImport to handle the import
        Excel::import(new ExamResultImport(), $file);

        // Redirect back with success message
        return redirect()->route('exams')->with('success', 'Exam results uploaded successfully.');
    }
    public function export()
    {
        return Excel::download(new ExamResultExport, 'students.xlsx');
    }


   
}

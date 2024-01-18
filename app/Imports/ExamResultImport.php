<?php

namespace App\Imports;

use App\Models\ExamResult;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ExamResultImport implements ToModel,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Assuming the order of columns is student_name, exam_name, exam_date, points
        // $formattedDate = \Carbon\Carbon::createFromFormat('m/d/Y', $row['exam_date'])->format('Y-m-d');

        // Check if the student_name already exists
        $existingResult = ExamResult::where('student_name', $row['student_name'])->first();

        // If the student_name doesn't exist, create a new ExamResult
        if (!$existingResult) {
            return new ExamResult([
                'student_name' => $row['student_name'],
                'exam_name' => $row['exam_name'],
                // 'exam_date' => $formattedDate,
                'points' => $row['points'],
            ]);
        }

        // If the student_name already exists, you can handle it here (e.g., log a message or skip)

        return null; // Return null to indicate that no new ExamResult should be created
    }
}

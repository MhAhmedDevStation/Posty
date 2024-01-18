@extends('layouts.app')

@section('content')
    <div
        class="breadcrumb-area pt-150 pb-150 theme-overlay"
        style="background-image:url({{ asset('images/gallery/gallery4.jpg') }})"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div
                        class="breadcrumb-content wow fadeInUp"
                        data-wow-delay=".3s"
                    >
                        <h1>Exams</h1>
                        <a href="/">Home<i class="fa fa-angle-double-right"></i></a>Exam List Report
                    </div>

                    @auth
                        <div class="col-xl-12">
                            <form
                                action="{{ route('exams.processUpload') }}"
                                method="post"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <input
                                    type="file"
                                    name="excel_file"
                                    accept=".xls, .xlsx"
                                    required
                                >
                                <button
                                    class="btn t-btn"
                                    type="submit"
                                >Upload</button>
                            </form>
                        </div>

                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Display Exam Results Table -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2>Exam Results</h2>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Exam Name</th>
                            <th>Exam Date</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through exam results data and display each row -->
                        @foreach ($examResults as $result)
                            <tr>
                                <td>{{ $result['student_name'] }}</td>
                                <td>{{ $result['exam_name'] }}</td>
                                {{-- <td>{{ $result['exam_date'] }}</td> --}}
                                <td>{{ $result['points'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @auth
        <div class="col-xl-12">
            <a href="{{ route('exams.export') }}">Export Exams</a>
        </div>

    @endauth
    </div>
@endsection

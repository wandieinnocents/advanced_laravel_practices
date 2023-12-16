<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SnappyImage;
// use SnappyPdf;
use PDF;
use App\Models\Post;
use Carbon\Carbon;


class PostsReportController extends Controller
{
 

    // print report by date range
    public function print_posts_report_by_date_range(Request $request)
    {
        // date ranges
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $data = Post::whereBetween('created_at', [$startDate, $endDate])->get();

        // Generate PDF
        $pdf = PDF::loadView('reports.posts_report', compact('data'));
        // Set landscape orientation
        $pdf->setPaper('a3', 'landscape');

        // return $pdf->stream('preview.pdf');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="preview.pdf"');

        // Download or display the PDF
        // return $pdf->download('filtered_data_with_deleted.pdf');

    }
}

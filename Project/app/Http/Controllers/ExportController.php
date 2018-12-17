<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Model\Result;
class ExportController extends Controller implements FromCollection, WithHeadings
{
	use Exportable;
    //
    public function collection()
    {
        $results = Result::all();
        foreach ($results as $row) {
        	$result[] = array(
        		'0'=>$row->player->full_name,
        		'1'=>$row->iq_score,
        		'2'=>$row->created_at,
        		'3'=>$row->minute.' phút '.$row->second.' giây',
        	);
        }
        return (collect($result));
    }
    public function headings(): array
    {
        return [
            'Name',
            'IQ Score',
            'Ngày thực hiện',
            'Thời gian',
        ];
    }
    public function export(){
     return Excel::download(new ExportController(), 'results.xlsx');
	}
}

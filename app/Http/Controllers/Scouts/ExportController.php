<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use App\Repositories\ScoutRepository;
use Carbon\Carbon;
use Request;
use Excel;

class ExportController extends Controller
{
    protected $scoutRepository;

    public function __construct(ScoutRepository $scoutRepository)
    {
        $this->scoutRepository = $scoutRepository;
    }

    public function exportScouts(Request $request)
    {
        $date = new Carbon();
        $fileTitle= 'Export Leatherman '.$date->toDateTimeString();

        Excel::create($fileTitle, function($excel) {

            $excel->setCreator('Leatherman v2')->setCompany('Troupe des Muntjacs');

            $excel->sheet('Scouts', function($sheet) {

                $scouts = $this->scoutRepository->excelData();
                $sheet->fromModel($scouts);

                $sheet->prependRow(1, array(
                    'Leatherman export'
                ));

                $sheet->mergeCells('A1:B1');

                $sheet->row(2, function($row) {
                    $row->setFontWeight('bold');
                    $row->setAlignment('center');
                });

                $sheet->cell('A1', function($titleCell) {
                    $titleCell->setFontWeight(true);
                    $titleCell->setFontSize(16);
                    $titleCell->setAlignment('center');
                });

                $sheet->cell('B1', function($commentCell) {
                   $commentCell->setFontColor('#797979');
                });

                $sheet->setHeight(1, 20);
                $sheet->setHeight(2, 17);
            });

        })->export('xls');
    }

}
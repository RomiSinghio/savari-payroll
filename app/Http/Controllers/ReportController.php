<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

class ReportController extends Controller
{
    private int $monday_rate = 14;
    private int $tuesday_rate = 14;
    private int $wednesday_rate = 14;
    private int $thursday_rate = 14;
    private int $friday_rate = 14;
    private int $saturday_rate = 14;
    private int $sunday_rate = 14;

    private float $monday_total_wage = 0;

    public function Rate (Request $request) {
        $this->monday_total_wage = ((float)$request->input('monday_hours')) * $this->monday_rate; 
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Reports/ReportsIndex', [
            'reports' => Report::all()->map(function ($report){
                return [
                    'id' => $report->id,
                    'driver_id' => $report->driver_id,
                    'monday_wage' => $this->monday_total_wage,
                    'net_pay' => $report->net_pay,
                    'actual_pay' => $report->actual_pay,
                ];
            })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Reports/ReportCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

   

        
        $total_hours = $request->input('monday_hours') + $request->input('tuesday_hours') + $request->input('wednesday_hours') + $request->input('thursday_hours') + $request->input('friday_hours') + $request->input('saturday_hours') + $request->input('sunday_hours');





        Report::create([
            'driver_id' => $request->input('driver_id'),
            'week_id' => $request->input('week_id'),
            'monday_hours' => $request->input('monday_hours'),
            'tuesday_hours' => $request->input('tuesday_hours'),
            'wednesday_hours' => $request->input('wednesday_hours'),
            'thursday_hours' => $request->input('thursday_hours'),
            'friday_hours' => $request->input('friday_hours'),
            'saturday_hours' => $request->input('saturday_hours'),
            'sunday_hours' => $request->input('sunday_hours'),
            'monday_cleaning' => $request->input('monday_cleaning'),
            'tuesday_cleaning' => $request->input('tuesday_cleaning'),
            'wednesday_cleaning' => $request->input('wednesday_cleaning'),
            'thursday_cleaning' => $request->input('thursday_cleaning'),
            'friday_cleaning' => $request->input('friday_cleaning'),
            'saturday_cleaning' => $request->input('saturday_cleaning'),
            'sunday_cleaning' => $request->input('sunday_cleaning'),
            'food_allowance' => $request->input('food_allowance'),
            'fuel_allowance' => $request->input('fuel_allowance'),
            'net_pay' => $request->input('net_pay'),
            'actual_pay' => $request->input('actual_pay'),
            'total_hours' => $total_hours,
        ]);
        return Inertia::render('Reports/ReportsIndex');

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
            return Inertia::render('Reports/ReportEdit', [
                'report' => $report
            ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->update([
            'driver_id' => $request->input('driver_id'),
            'week_id' => $request->input('week_id'),
            'monday_hours' => $request->input('monday_hours'),
            'tuesday_hours' => $request->input('tuesday_hours'),
            'wednesday_hours' => $request->input('wednesday_hours'),
            'thursday_hours' => $request->input('thursday_hours'),
            'friday_hours' => $request->input('friday_hours'),
            'saturday_hours' => $request->input('saturday_hours'),
            'sunday_hours' => $request->input('sunday_hours'),
            'monday_cleaning' => $request->input('monday_cleaning'),
            'tuesday_cleaning' => $request->input('tuesday_cleaning'),
            'wednesday_cleaning' => $request->input('wednesday_cleaning'),
            'thursday_cleaning' => $request->input('thursday_cleaning'),
            'friday_cleaning' => $request->input('friday_cleaning'),
            'saturday_cleaning' => $request->input('saturday_cleaning'),
            'sunday_cleaning' => $request->input('sunday_cleaning'),
            'food_allowance' => $request->input('food_allowance'),
            'fuel_allowance' => $request->input('fuel_allowance'),
            'net_pay' => $request->input('net_pay'),
            'actual_pay' => $request->input('actual_pay'),
        ]);
        return Inertia::render('Reports/ReportsIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}

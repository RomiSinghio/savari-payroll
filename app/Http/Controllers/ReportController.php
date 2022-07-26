<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Driver;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Mail\EmployeeCheckMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Reports/ReportsIndex', [
            'reports' => Report::with('driver')
            ->orderBy('created_at', 'desc')
            ->get()->map(function ($report){
                return [
                    'id' => $report->id,
                    'name' => $report->driver->name ?? 'no name',
                    'status' => $report->status ?? null,
                    'monday_hours' => $report->monday_hours,
                    'tuesday_hours' => $report->tuesday_hours,
                    'wednesday_hours' => $report->wednesday_hours, 
                    'thursday_hours' => $report->thursday_hours,
                    'friday_hours' => $report->friday_hours,
                    'saturday_hours' => $report->saturday_hours,
                    'sunday_hours' => $report->sunday_hours,
                    'total_hours' => $report->total_hours,
                    'monday_fixed' => $report->monday_fixed,
                    'tuesday_fixed' => $report->tuesday_fixed,
                    'wednesday_fixed' => $report->wednesday_fixed,
                    'thursday_fixed' => $report->thursday_fixed,
                    'friday_fixed' => $report->friday_fixed,
                    'saturday_fixed' => $report->saturday_fixed,
                    'sunday_fixed' => $report->sunday_fixed,
                    'food_allowance' => $report->food_allowance,
                    'fuel_allowance' => $report->fuel_allowance,
                    'deductions' => $report->deductions,
                    'expenses' => $report->expenses,
                    'notes' => $report->notes,
                    'payslip' => $report->payslip,
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
        return Inertia::render('Reports/ReportCreate', [
            'drivers' => Driver::pluck('name', 'id'),
        ]);
    }

    /**4
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request )
    {

        $payslip = $request->payslip;
        if($request->file('payslip')){
            $payslip = $request->file('payslip')->store('payslips', 'public');
        }
        Report::create([
            'driver_id' => $request->input('driver_id'),
            'status' => $request->input('status'),
            'monday_hours' => $request->input('monday_hours'),
            'tuesday_hours' => $request->input('tuesday_hours'),
            'wednesday_hours' => $request->input('wednesday_hours'),
            'thursday_hours' => $request->input('thursday_hours'),
            'friday_hours' => $request->input('friday_hours'),
            'saturday_hours' => $request->input('saturday_hours'),
            'sunday_hours' => $request->input('sunday_hours'),
            'total_hours' => $request->input('total_hours'),
            'monday_fixed' => $request->input('monday_fixed'),
            'tuesday_fixed' => $request->input('tuesday_fixed'),
            'wednesday_fixed' => $request->input('wednesday_fixed'),
            'thursday_fixed' => $request->input('thursday_fixed'),
            'friday_fixed' => $request->input('friday_fixed'),
            'saturday_fixed' => $request->input('saturday_fixed'),
            'sunday_fixed' => $request->input('sunday_fixed'),
            'food_allowance' => $request->input('food_allowance'),
            'fuel_allowance' => $request->input('fuel_allowance'),
            'deductions' => $request->input('deductions'),
            'expenses' => $request->input('expenses'),
            'notes' => $request->input('notes'),
            'net_pay' => $request->input('net_pay'),
            'actual_pay' => $request->input('actual_pay'),
            'payslip' => $payslip,

        ]);
    
        return Redirect::route('reports');

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
                'drivers' => Driver::pluck('name', 'id'),
                'report' => $report,
                'payslip' => asset('storage/' . $report->payslip),
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
        $payslip = $report->payslip;
        if($request->file('payslip')){
            Storage::delete('public/' . $report->payslip);
            $payslip = $request->file('payslip')->store('payslips', 'public');
        }
        $report->update([
            'driver_id' => $request->input('driver_id'),
            'status' => $request->input('status') ?? null,
            'monday_hours' => $request->input('monday_hours'),
            'tuesday_hours' => $request->input('tuesday_hours'),
            'wednesday_hours' => $request->input('wednesday_hours'),
            'thursday_hours' => $request->input('thursday_hours'),
            'friday_hours' => $request->input('friday_hours'),
            'saturday_hours' => $request->input('saturday_hours'),
            'sunday_hours' => $request->input('sunday_hours'),
            'total_hours' => $request->input('total_hours'),
            'monday_fixed' => $request->input('monday_fixed'),
            'tuesday_fixed' => $request->input('tuesday_fixed'),
            'wednesday_fixed' => $request->input('wednesday_fixed'),
            'thursday_fixed' => $request->input('thursday_fixed'),
            'friday_fixed' => $request->input('friday_fixed'),
            'saturday_fixed' => $request->input('saturday_fixed'),
            'sunday_fixed' => $request->input('sunday_fixed'),
            'food_allowance' => $request->input('food_allowance'),
            'fuel_allowance' => $request->input('fuel_allowance'),
            'deductions' => $request->input('deductions'),
            'expenses' => $request->input('expenses'),
            'notes' => $request->input('notes'),
            'net_pay' => $request->input('net_pay'),
            'actual_pay' => $request->input('actual_pay'),
            'payslip' => $payslip,
        ]);
        return Redirect::route('reports');
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



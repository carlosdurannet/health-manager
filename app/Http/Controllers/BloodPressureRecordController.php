<?php

namespace App\Http\Controllers;

use App\Models\BloodPressureRecord;
use Illuminate\Http\Request;

class BloodPressureRecordController extends Controller
{

    public function create()
    {
        return view('bpr.create');
    }

    public function edit(BloodPressureRecord $record)
    {
        return view('bpr.edit', compact('record'));
    }

    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'systolic' => 'required|integer',
                'diastolic' => 'required|integer',
                'pulse' => 'required|integer',
                'recorded_at' => 'required|date',
            ]);

            BloodPressureRecord::create($validated);

            return redirect()->route('home')->with('success', 'Blood pressure record created successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    public function update(Request $request, BloodPressureRecord $record)
    {
        try {

            if (!$record->exists()) {
                throw new \Exception('Record not found.');
            }

            $validated = $request->validate([
                'systolic' => 'required|integer',
                'diastolic' => 'required|integer',
                'pulse' => 'required|integer',
                'recorded_at' => 'required|date',
            ]);

            $record->update($validated);

            return redirect()->route('home')->with('success', 'Blood pressure record updated successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        //dd($setting);
        return view('dashboard.settings.edit', compact('setting'));
    } // end of edit

    public function update(Request $request, Setting $setting)
    {
        $data =  $request->validate([
            'site_name' => 'required|string|max:50'
        ]);

        $setting->update($data);
        session()->flash('status', 'Settings updated successfully!');
        return redirect(route('dashboard.index'));
    } // end of edit


}

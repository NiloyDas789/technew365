<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanySetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanySettingController extends Controller
{
    public function editCompanySetting()
    {
        $this->checkPermission('status.access');
        // dd('so;fkajs');

        $company_setting = CompanySetting::first();
        return view('backend.settings.company_setting', compact('company_setting'));
    }

    public function updateCompanySetting(Request $request): RedirectResponse
    {
        // dd($request->all());
        $this->checkPermission('settings.edit');

        $request->validate([
            'name'             => 'required|string',
            'mobile1'          => 'nullable|digits_between:10,15',
            'mobile2'          => 'nullable|digits_between:10,15',
            'email'            => 'nullable|email',
            'about'            => 'nullable|string',
            'about_editor'     => 'nullable|string',
            'about_footer'     => 'nullable|string',
            'facebook'         => 'nullable|string',
            'twitter'          => 'nullable|string',
            'instagram'        => 'nullable|string',
            'whatsapp'         => 'nullable|string',
            'location'         => 'nullable|string',
            'logo'             => 'nullable|image|mimes:webp|max:200000',
            'footer_logo'      => 'nullable|image|mimes:webp|max:200000',
            'meta_title'       => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
            'meta_description' => 'nullable|string',

            // 'paypal_mode'                  => 'required|string',
            // 'paypal_client_id'             => 'nullable|string',
            // 'paypal_client_secret'         => 'nullable|string',
            // 'invoice_note_to_recipient'    => 'nullable|string',
            // 'invoice_terms_and_conditions' => 'nullable|string',
        ]);

        $companySetting = CompanySetting::first();
        $logo = $companySetting->logo;
        $footer_logo = $companySetting->footer_logo;

        if ($request->hasFile('logo')) {
            if (File::exists('storage/' . $companySetting->logo)) {
                File::delete('storage/' . $companySetting->logo);
            }
            $fileName = Rand() . '.' . $request->file('logo')->getClientOriginalExtension();
            $logo = $request->file('logo')->storeAs('images/logo', $fileName, 'public');
        }

        if ($request->hasFile('footer_logo')) {
            if (File::exists('storage/' . $companySetting->footer_logo)) {
                File::delete('storage/' . $companySetting->footer_logo);
            }
            $fileName = Rand() . '.' . $request->file('footer_logo')->getClientOriginalExtension();
            $footer_logo = $request->file('footer_logo')->storeAs('images/logo', $fileName, 'public');
        }

        $companySetting->update([
            'name'             => $request->input('name'),
            'mobile1'          => $request->input('mobile1'),
            'mobile2'          => $request->input('mobile2'),
            'email'            => $request->input('email'),
            'about'            => $request->input('about'),
            'about_footer'     => $request->input('about_footer'),
            'facebook'         => $request->input('facebook'),
            'twitter'          => $request->input('twitter'),
            'instagram'        => $request->input('instagram'),
            'whatsapp'         => $request->input('whatsapp'),
            'location'         => $request->input('location'),
            'logo'             => $logo,
            'footer_logo'      => $footer_logo,
            'meta_title'       => $request->input('meta_title'),
            'meta_keywords'    => $request->input('meta_keywords'),
            'meta_description' => $request->input('meta_description'),

            // 'paypal_mode'                  => $request->input('paypal_mode'),
            // 'paypal_client_id'             => $request->input('paypal_client_id'),
            // 'paypal_client_secret'         => $request->input('paypal_client_secret'),
            // 'invoice_note_to_recipient'    => $request->input('invoice_note_to_recipient'),
            // 'invoice_terms_and_conditions' => $request->input('invoice_terms_and_conditions'),
        ]);

        return back()->with('success', 'Settings Updated.');
    }
}

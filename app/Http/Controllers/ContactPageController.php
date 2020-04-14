<?php

namespace Revlv\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Mail;
use ReCaptcha\ReCaptcha;
use Revlv\Mail\FeedbackSend;
use Selection;

class ContactPageController extends Controller
{
    /**
     * [showPage description].
     *
     * @return [type] [description]
     */
    public function showPage()
    {
        return view('pages.contact-us');
    }

    /**
     * [submit description].
     *
     * @param Request $request [description]
     *
     * @return [type] [description]
     */
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'company' => 'required|max:50',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|max:50',
            'inquiry' => [
                'required',
                Selection::get('InquiryTypes')->rules(),
            ],
            'message' => 'required|max:500|min:5',
        ]);

        try {
            $response = (new ReCaptcha(config('services.google.secret')))
                ->setExpectedAction('contact_us')
                ->verify($request->recaptcha, $request->ip());

            if (!$response->isSuccess()) {
                abort(400);
            }
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors([
                    'captcha' => trans('responses.inquiry_failed'),
                ]);
        }

        Mail::to('info@revlv.com')->send(new FeedbackSend($request->all()));

        return redirect()
            ->route('contact', ['#inquiry-form'])
            ->with('notification', trans('responses.inquiry_succes'));
    }
}

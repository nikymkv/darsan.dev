<?php 
namespace Itd\Admin\Components;

use CMS\Classes\ComponentBase;
use Input;
use Mail;
use Itd\Admin\Models\TypeService;

class FeedbackForm extends ComponentBase 
{
    public function componentDetails()
    {
        return [
            'name' => 'Feedback Form',
            'description' => 'Feedback Form use mail',
        ];
    }

    public function onRender()
    {
        // dd($this->page->layout->components['typeServiceList']->records);
        $this->page['typeServices'] = $this->page->layout->components['typeServiceList']->records;
    }
     
    public function onSend()
    {
        $vars = [
            'name' => Input::get('name'),
            'phone' => Input::get('phone'),
            'service' => Input::get('service'),
            'date' => Input::get('date'),
        ];

        $pat = 'itd.admin::mail.feedback-message';


        Mail::send($pat, $vars, function($message) {
            $message->to('kojiek7212@gmail.com', 'Admin from Darsan');
        });
    }


}
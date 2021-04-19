<?php namespace Itd\Admin;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Itd\Admin\Components\FeedbackForm' => 'feedbackform',
        ];
    }

    public function registerSettings()
    {
    }

    public function registerMailTemplates()
    {
        return [
            'itd.admin::mail.feedback-message'
        ];
    }
}

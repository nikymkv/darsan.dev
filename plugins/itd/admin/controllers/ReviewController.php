<?php namespace Itd\Admin\Controllers;

use Backend\Classes\Controller;
use Itd\Admin\Models\Review;
use BackendMenu;

class ReviewController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Itd.Admin', 'main-menu-item', 'review-menu-item');
    }
}

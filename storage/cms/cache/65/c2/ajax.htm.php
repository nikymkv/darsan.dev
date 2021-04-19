<?php 
use Itd\Admin\Models\Review;class Cms6078365647484610877626_7f72f5ac55ea4e84f54b65969a3593b3Class extends Cms\Classes\PartialCode
{

public function onStart()
{
    $this['images'] = Review::where('type', 1)->get();
    $this['movies'] = Review::where('type', 2)->get();
}
}

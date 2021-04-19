<?php 
class Cms607801c3de219704461996_251ae0d7fc3119f3c68f03108d40dcacClass extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = input('value1');
    $value2 = input('value2');
    $operation = input('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value1 / $value2;
            break;
    }
}
}

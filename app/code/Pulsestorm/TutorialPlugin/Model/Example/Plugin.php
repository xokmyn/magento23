<?php
namespace Pulsestorm\TutorialPlugin\Model\Example;
class Plugin
{
    public function afterGetMessage($subject, $result)
    {
        echo "Calling " , __METHOD__,"\n";
        return 'We are so tired of saying hello';
    }
}
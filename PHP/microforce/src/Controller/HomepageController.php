<?php
namespace MicroForce\Controller;

use MicroForce\Engine\EngineSingleton;
use MicroForce\Model\Student;

class HomepageController
{
    public function homepage()
    {
        $students = Student::findAll();
        //var_dump($students);
        return EngineSingleton::getEngine()->render('homepage.html.php');
    }
}

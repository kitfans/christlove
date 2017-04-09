<?php
namespace KitWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendarController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitWebBundle:Calendar:index.html.twig');
    }
}
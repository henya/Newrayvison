<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace En\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout("layout/en");
        return new ViewModel(array(
            "headTitle" => "Render Farm Price | Fox Render Farm",
            "description" => "Fox Renderfarm is the most cost effective render farm price ever, you can even free try our service before you make any purchase.",
            "keywords" => "render farm price, CPU render farm price, GPU render farm price, render farm rates",
        ));
    }


    public function CaseAction()
    {
        $this->layout("layout/en");
        return new ViewModel(array(
            "headTitle" => "Render Farm Price | Fox Render Farm",
            "description" => "Fox Renderfarm is the most cost effective render farm price ever, you can even free try our service before you make any purchase.",
            "keywords" => "render farm price, CPU render farm price, GPU render farm price, render farm rates",
        ));
    }


    /**
     * @return ViewModel
     */
    public function joinUsAction()
    {
        $this->layout("layout/en3");
        return new ViewModel(array(
            "headTitle" => "Render Farm Price | Fox Render Farm",
            "description" => "Fox Renderfarm is the most cost effective render farm price ever, you can even free try our service before you make any purchase.",
            "keywords" => "render farm price, CPU render farm price, GPU render farm price, render farm rates",
        ));
    }

    public function AboutAction()
    {
        $this->layout("layout/en2");
        return new ViewModel(array(
            "headTitle" => "Render Farm Price | Fox Render Farm",
            "description" => "Fox Renderfarm is the most cost effective render farm price ever, you can even free try our service before you make any purchase.",
            "keywords" => "render farm price, CPU render farm price, GPU render farm price, render farm rates",
        ));
    }
}

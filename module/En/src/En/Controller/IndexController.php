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
            "headTitle" => "Rayvision, the most user-friendly cloud render farm platform",
            "description" => "Rayvision is focusing on the study of cluster rendering for the visual cloud computing industry, we also have the products of RaySync (High Speed Transfer Engine), VIVUE.io (Online Video Review & Collaboration Platform)",
            "keywords" => "Rayvision, Rayvision Cloud Render Farm, Rayvision Render Farm",
        ));
    }


    public function CaseAction()
    {
        $this->layout("layout/en");
        return new ViewModel(array(
            "headTitle" => "The Projects Finished by Rayvision",
            "description" => "Here are the well know customers and their projects finished by Rayvision.",
            "keywords" => "Rayvision Projects, Rayvision Customers",
        ));
    }


    public function AboutAction()
    {
        $this->layout("layout/en2");
        return new ViewModel(array(
            "headTitle" => "The Introduction for Rayvision",
            "description" => "Here are the company introduction and qualifications of Rayvision.",
            "keywords" => "About Rayvision",
        ));
    }
//    301跳转 fox
    public function FoxJumpAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.rayvision.com/en');
        $response->setStatusCode(301);
    }



}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        return new ViewModel(array(
            "headTitle" => "瑞云-最贴近用户的视觉云计算服务平台",
            "description" => "深圳市瑞云科技有限公司是国内领先的云计算服务提供商,全国统一品牌“RAYVISION”,旗下包含Renderbus亚洲最大的云渲染农场,更高效的VIVUE.io审片协作平台,领先的数据传输核心技术RaySync镭速传输解决方案三大品牌.协同合作,极大提高制作团队的工作效率,充分释放无限想象力和创意!",
            "keywords" => "深圳市瑞云科技有限公司,rayvision,Renderbus,VIVUE.io,RaySync镭速",
        ));
    }


    public function CaseAction()
    {

        return new ViewModel(array(
            "headTitle" => "成功案例|瑞云渲染-中国首个自助式云渲染农场",
            "description" => "瑞云渲染-云渲染农场，为奥斯卡做渲染的中国公司。与Industrial Light and Magic(工业光魔),Pixar Animation Studios(皮克斯),DreamWorks SKG(梦工厂)，以及国内主流CG动漫制作公司等都有合作,为用户提供更安全、更稳定、更省时的云渲染服务。",
            "keywords" => "成功案例,哈布洛先生,奥斯卡,印度超人3,Ribbit,秦时明月,龙之谷,云渲染,渲染农场，瑞云渲染",
        ));
    }


    /**
     * @return ViewModel
     */
    public function joinUsAction()
    {
        $this->layout("layout/layout3");
        return new ViewModel(array(
            "headTitle" => "快来加入RAYVISION伐木累吧",
            "description" => "瑞云渲染招聘-深圳市瑞云科技有限公司是一家专注于集群渲染、云计算与移动互联网方向,为动漫影视、CG效果图等提供云渲染服务的新型互联网科技公司,是中国 “自助式云渲染”的开创者。",
            "keywords" => "瑞云渲染招聘，瑞云科技招聘，Rayvision 招聘",
        ));
    }

    public function AboutAction()
    {
        $this->layout("layout/layout3");
        return new ViewModel(array(
            "headTitle" => "深圳市瑞云科技有限公司|瑞云渲染 -中国首个自助式云渲染农场",
            "description" => "瑞云渲染-深圳市瑞云科技有限公司是一家专注于集群渲染、云计算与移动互联网方向,为动漫影视、CG效果图等提供云渲染服务的新型互联网科技公司,是中国 “自助式云渲染”的开创者。",
            "keywords" => "瑞云渲染,瑞云科技,深圳市瑞云科技有限公司，云渲染,渲染农场,自助式云渲染,集群渲染,云计算,动漫影视,CG效果",
        ));
    }


//    301跳转 fox
    public function foxHomeAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com');
        $response->setStatusCode(301);
    }
    public function foxAboutAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/about.html');
        $response->setStatusCode(301);
    }
    public function foxCloudAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/cloud-rendering.html');
        $response->setStatusCode(301);
    }
    public function foxClientAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/client-works.html');
        $response->setStatusCode(301);
    }
    public function foxPricingAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/pricing.html');
        $response->setStatusCode(301);
    }
    public function foxDownloadAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/download.html');
        $response->setStatusCode(301);
    }
    public function foxPartnerAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/partner.html');
        $response->setStatusCode(301);
    }
    public function foxTermAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/term-of-service.html');
        $response->setStatusCode(301);
    }
    public function foxFreeAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.foxrenderfarm.com/free-render-farm.html');
        $response->setStatusCode(301);
    }



//    301跳转 renderbus
    public function RenderAAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.rayvision.com/');
        $response->setStatusCode(301);
    }
    public function RenderBAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/film-tv-rendering.html');
        $response->setStatusCode(301);
    }
    public function RenderCAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/aspera.html');
        $response->setStatusCode(301);
    }
    public function RenderDAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/architectural-rendering.html');
        $response->setStatusCode(301);
    }
    public function RenderEAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/download.html');
        $response->setStatusCode(301);
    }
    public function RenderFAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/pricing.html');
        $response->setStatusCode(301);
    }
    public function RenderGAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/partner.html');
        $response->setStatusCode(301);
    }
    public function RenderHAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/architectural-rendering.html');
        $response->setStatusCode(301);
    }
    public function RenderIAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/gocloud.html');
        $response->setStatusCode(301);
    }
    public function RenderJAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.rayvision.com/join-us.html');
        $response->setStatusCode(301);
    }
    public function RenderKAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/cg2016sz.html');
        $response->setStatusCode(301);
    }
    public function RenderRAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/news/main');
        $response->setStatusCode(301);
    }
    public function RenderSAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/support/post-id-1869');
        $response->setStatusCode(301);
    }
    public function RenderTAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/support/index');
        $response->setStatusCode(301);
    }
    public function RenderUAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/support');
        $response->setStatusCode(301);
    }
    public function RenderVAction()
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Location', 'http://www.rayvision.com/case.html');
        $response->setStatusCode(301);
    }
//    public function RenderWAction()
//    {
//        $response = $this->getResponse();
//        $response->getHeaders()->addHeaderLine('Location', 'http://www.renderbus.com/support');
//        $response->setStatusCode(301);
//    }




}

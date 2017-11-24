<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'join-us' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/join-us.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'joinUs',
                    ),
                ),
            ),
            'about' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/about.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'About',
                    ),
                ),
            ),
            'case' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/case.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'Case',
                    ),
                ),
            ),
//            oldrayvison 301跳转 fox

            'en-index1' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/en/:page{1}',
                    'constraints' => array(
                        'page'=>'(aspera.html|munu.html|branding.html|cg2016sz.html){1}',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxHome',
                    ),
                ),
            ),
            'en-index2' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/en/:page{1}',
                    'constraints' => array(
                        'page'=>'(cloud-rendering.html|customized.html|cloud-rendering.php){1}',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxCloud',
                    ),
                ),
            ),
            'en-index3' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/en/:page{1}',
                    'constraints' => array(
                        'page'=>'(about.html|join-us.html|join-us2.html){1}',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxAbout',
                    ),
                ),
            ),
            'en-index4' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/client-works.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxClient',
                    ),
                ),
            ),
            'en-index5' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/pricing.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxPricing',
                    ),
                ),
            ),
            'en-index6' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/download.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxDownload',
                    ),
                ),
            ),
            'en-index7' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/partner.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxPartner',
                    ),
                ),
            ),
            'en-index8' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/term-of-service.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxTerm',
                    ),
                ),
            ),
            'en-index9' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/en/gocloud.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'foxFree',
                    ),
                ),
            ),

//old rayvison 301跳转 renderbus
            're-indexA' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/main.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderA',
                    ),
                ),
            ),
            're-indexB' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/customized.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderB',
                    ),
                ),
            ),
            're-indexC' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/aspera.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderC',
                    ),
                ),
            ),
            're-indexD' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/cloud-rendering.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderD',
                    ),
                ),
            ),
            're-indexE' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/download.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderE',
                    ),
                ),
            ),
            're-indexF' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/pricing.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderF',
                    ),
                ),
            ),
            're-indexG' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/partner.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderG',
                    ),
                ),
            ),
            're-indexH' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/cloud-rendering.php',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderH',
                    ),
                ),
            ),
            're-indexI' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/gocloud.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderI',
                    ),
                ),
            ),
            're-indexJ' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/join-us2.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderJ',
                    ),
                ),
            ),
            're-indexK' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/cg2016sz.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderK',
                    ),
                ),
            ),
            're-indexR' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/news/main',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderR',
                    ),
                ),
            ),
            're-indexS' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/support/post-id-1869',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderS',
                    ),
                ),
            ),
            're-indexT' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/support/index',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderT',
                    ),
                ),
            ),
            're-indexU' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/support',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderU',
                    ),
                ),
            ),
            're-indexV' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/client-works.html',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'RenderV',
                    ),
                ),
            ),

        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => Controller\IndexController::class
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layout2'           => __DIR__ . '/../view/layout/layout2.phtml',
            'layout/layout3'           => __DIR__ . '/../view/layout/layout3.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);

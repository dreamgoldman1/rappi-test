<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosAction',    'order' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_productos' => array (  0 =>   array (    0 => 'order',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosAction',    'order' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order',    ),    1 =>     array (      0 => 'text',      1 => '/productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_productos_agotados' => array (  0 =>   array (    0 => 'order',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosagotadosAction',    'order' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order',    ),    1 =>     array (      0 => 'text',      1 => '/productos-agotados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_productos_mas_vendidos' => array (  0 =>   array (    0 => 'order',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosmasvendidosAction',    'order' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order',    ),    1 =>     array (      0 => 'text',      1 => '/productos-mas-vendidos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_productos_categoria' => array (  0 =>   array (    0 => 'categoryId',    1 => 'order',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productoscategoryAction',    'categoryId' => 1,    'order' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categoryId',    ),    2 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_producto_detalle' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productodetalleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/producto-detalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_carrito_agregar' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::agregarcarritoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/agregar-carrito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_carrito_quitar' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::quitarcarritoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/quitar-carrito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_carrito_contar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::countcarritoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contar-carrito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_ver_carrito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::vercarritoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_eliminar_carrito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::eliminarcarritoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminar-carrito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_footer_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\FooterBundle\\Controller\\FooterController::footerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/footer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_sidebar_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\SidebarBundle\\Controller\\SidebarController::sidebarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sidebar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_sidebar_masvendidos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\SidebarBundle\\Controller\\MasVendidosController::masvendidosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/masvendidos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_header_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\HeaderBundle\\Controller\\HeaderController::headerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/header',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

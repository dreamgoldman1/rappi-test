<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            // gol_api_homepage
            if ($pathinfo === '/api') {
                return array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apiAction',  '_route' => 'gol_api_homepage',);
            }

            // gol_api_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::adminAction',  '_route' => 'gol_api_admin',);
            }

        }

        // gol_content_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gol_content_homepage');
            }

            return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosAction',  'order' => 1,  '_route' => 'gol_content_homepage',);
        }

        if (0 === strpos($pathinfo, '/productos')) {
            // gol_content_productos
            if (preg_match('#^/productos(?:/(?P<order>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_productos')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosAction',  'order' => 1,));
            }

            if (0 === strpos($pathinfo, '/productos-')) {
                // gol_content_productos_agotados
                if (0 === strpos($pathinfo, '/productos-agotados') && preg_match('#^/productos\\-agotados(?:/(?P<order>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_productos_agotados')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosagotadosAction',  'order' => 1,));
                }

                // gol_content_productos_mas_vendidos
                if (0 === strpos($pathinfo, '/productos-mas-vendidos') && preg_match('#^/productos\\-mas\\-vendidos(?:/(?P<order>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_productos_mas_vendidos')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productosmasvendidosAction',  'order' => 1,));
                }

            }

        }

        // gol_content_productos_categoria
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria(?:/(?P<categoryId>[^/]++)(?:/(?P<order>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_productos_categoria')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productoscategoryAction',  'categoryId' => 1,  'order' => 1,));
        }

        // gol_content_producto_detalle
        if (0 === strpos($pathinfo, '/producto-detalle') && preg_match('#^/producto\\-detalle/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_producto_detalle')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\ProductoController::productodetalleAction',));
        }

        // gol_content_carrito_agregar
        if (0 === strpos($pathinfo, '/agregar-carrito') && preg_match('#^/agregar\\-carrito/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_carrito_agregar')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::agregarcarritoAction',));
        }

        // gol_content_carrito_quitar
        if (0 === strpos($pathinfo, '/quitar-carrito') && preg_match('#^/quitar\\-carrito/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_carrito_quitar')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::quitarcarritoAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // gol_content_carrito_contar
            if ($pathinfo === '/contar-carrito') {
                return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::countcarritoAction',  '_route' => 'gol_content_carrito_contar',);
            }

            // gol_content_ver_carrito
            if ($pathinfo === '/carrito') {
                return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::vercarritoAction',  '_route' => 'gol_content_ver_carrito',);
            }

        }

        // gol_content_eliminar_carrito
        if ($pathinfo === '/eliminar-carrito') {
            return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\CarritoController::eliminarcarritoAction',  '_route' => 'gol_content_eliminar_carrito',);
        }

        // gol_footer_homepage
        if ($pathinfo === '/footer') {
            return array (  '_controller' => 'GOL\\FooterBundle\\Controller\\FooterController::footerAction',  '_route' => 'gol_footer_homepage',);
        }

        // gol_sidebar_homepage
        if ($pathinfo === '/sidebar') {
            return array (  '_controller' => 'GOL\\SidebarBundle\\Controller\\SidebarController::sidebarAction',  '_route' => 'gol_sidebar_homepage',);
        }

        // gol_sidebar_masvendidos
        if ($pathinfo === '/masvendidos') {
            return array (  '_controller' => 'GOL\\SidebarBundle\\Controller\\MasVendidosController::masvendidosAction',  '_route' => 'gol_sidebar_masvendidos',);
        }

        // gol_header_homepage
        if ($pathinfo === '/header') {
            return array (  '_controller' => 'GOL\\HeaderBundle\\Controller\\HeaderController::headerAction',  '_route' => 'gol_header_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

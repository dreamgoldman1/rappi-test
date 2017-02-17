<?php

namespace GOL\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

/**
 * Clase Carrito, encargado de la manipulación del carrito
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class CarritoController extends Controller {
    /**
     * Devuelve toda la información dentro del carrito
     * @return array
     */
    public function getCarrito(){
        $session = new Session();
        $productos = array();
        if ($session->has('productos')){
            $productos = $session->get('productos');
        }
        return $productos;
    }
    
    /**
     * Devuelve la cantidad de productos en el carrito y el valor total
     * @return Response Json
     */
    public function countCarritoAction(){
        $session = new Session();
        $productos = array();
        if ($session->has('productos')){
            $productos = $session->get('productos');
            $service = $this->get('gol_api.api_json');
            $totalCarrito = 0;
            foreach ($productos as $producto){
                $productoData = $service->getProductById($producto['id']);
                $totalCarrito = $totalCarrito + ($productoData['price'] * $producto['qty']);
            }
        }
        $dataCarrito = array('count' => count($productos), 'totalCarrito' => $totalCarrito);
        $dataCarrito = json_encode($dataCarrito);
        return new Response($dataCarrito);
    }
    
    /**
     * Se encarga de agregar productos al carrito
     * @param integer $productId
     * @return redirect
     */
    public function agregarCarritoAction($productId){
        $service = $this->get('gol_api.api_json');
        $session = new Session();
        if ($session->has('productos')){
            $productos = $session->get('productos');
            $flag = false;
            foreach ($productos as $key => $producto){
                if ($producto['id'] == $productId){
                    $productos[$key]['qty'] = $productos[$key]['qty'] + 1;
                    $flag = true;
                }
            }
            if (!$flag){
                array_push($productos, array('id' => $productId, 'qty' => 1));
            }
        }else{
            $productos[] = array('id' => $productId, 'qty' => 1);
        }
        $session->set('productos',$productos);
        return $this->redirect($service->getEnv() . 'carrito');
    }
    
    /**
     * Elimina articulos del carrito
     * @param integer $productId
     * @return redirect
     */
    public function quitarCarritoAction($productId){
        $service = $this->get('gol_api.api_json');
        $session = new Session();
        if ($session->has('productos')){
            $productos = $session->get('productos');
            foreach ($productos as $key => $producto){
                if ($producto['id'] == $productId){
                    unset($productos[$key]);
                }
            }
            $session->set('productos',$productos);
        }
        return $this->redirect($service->getEnv() . 'carrito');
    }
    
    /**
     * Limpia todo el carrito
     * @return redirect
     */
    public function eliminarCarritoAction(){
        $service = $this->get('gol_api.api_json');
        $session = new Session();
        $session->clear();
        return $this->redirect($service->getEnv() . 'carrito');
    }
    
    /**
     * Muestra todo el detalle del carrito para pasar al Checkout
     * @return render
     */
    public function verCarritoAction(){
        $session = new Session();
        $productos = array();
        $productoData = array();
        $service = $this->get('gol_api.api_json');
        if ($session->has('productos')){
            $productos = $session->get('productos');
            foreach ($productos as $producto){
                $productoData[] = $service->getProductById($producto['id']);
            }
        }
        return $this->render('GOLContentBundle:Carrito:carrito.html.twig', array(
            'productoData' => $productoData,
            'productos' => $productos,
            'numItems' => count($productos),
            'env' => $service->getEnv(),
        ));
    }
}

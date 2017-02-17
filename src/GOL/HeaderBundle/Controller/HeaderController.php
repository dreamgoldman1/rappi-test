<?php

namespace GOL\HeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GOL\ContentBundle\Controller\CarritoController;

/**
 * Clase Header, encargado de la manipulación del header
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class HeaderController extends Controller
{
    /**
     * Muestra el bloque del header
     * @return render
     */
    public function headerAction()
    {
        $service = $this->get('gol_api.api_json');
        $productos = CarritoController::getCarrito();
        $numItems = count($productos);
        $totalCarrito = 0;
        foreach ($productos as $producto){
            $productoData = $service->getProductById($producto['id']);
            $totalCarrito = $totalCarrito + ($productoData['price'] * $producto['qty']);
        }
        
        return $this->render('GOLHeaderBundle:Header:header.html.twig', array(
            'numItems' => $numItems,
            'totalCarrito' => $totalCarrito,
            'env' => $service->getEnv(),
        ));
    }
}

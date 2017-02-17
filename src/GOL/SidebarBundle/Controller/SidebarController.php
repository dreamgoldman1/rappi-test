<?php

namespace GOL\SidebarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GOL\ContentBundle\Controller\CarritoController;

/**
 * Clase Sidebar, encargado de la manipulación del sidebar
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class SidebarController extends Controller
{
    /**
     * Genera el bloque para el sidebar
     * @return render
     */
    public function sidebarAction()
    {
        $service = $this->get('gol_api.api_json');
        $productos = CarritoController::getCarrito();
        $numItems = count($productos);
        $categories = $service->getCategories();
        $qtyByCategory = $service->getQtyProductsByCategory();
        
        $totalCarrito = 0;
        foreach ($productos as $producto){
            $productoData = $service->getProductById($producto['id']);
            $totalCarrito = $totalCarrito + ($productoData['price'] * $producto['qty']);
        }
        
        return $this->render('GOLSidebarBundle:Sidebar:sidebar.html.twig', array(
            'numItems' => $numItems,
            'totalCarrito' => $totalCarrito,
            'categories' => $categories,
            'qtyByCategory' => $qtyByCategory,
            'env' => $service->getEnv(),
        ));
    }
}
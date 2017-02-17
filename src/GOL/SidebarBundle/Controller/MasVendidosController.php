<?php

namespace GOL\SidebarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Clase MasVendidos, widget en el sidebar que muestra los productos más vendidos
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class MasVendidosController extends Controller 
{
    /**
     * Devuelve los productos más vendidos para el sidebar
     * @return render
     */
    public function masVendidosAction(){
        $service = $this->get('gol_api.api_json');
        $masVendidos = $service->getProductsBestSeller();
        return $this->render('GOLSidebarBundle:MasVendidos:masvendidos.html.twig', array(
            'masVendidos' => $masVendidos,
            'env' => $service->getEnv(),
        ));
    }
}

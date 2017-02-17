<?php

namespace GOL\FooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Clase Footer, encargado de la manipulación del footer
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class FooterController extends Controller
{
    /**
     * Muestra el bloque del footer
     * @return render
     */
    public function footerAction()
    {
        $service = $this->get('gol_api.api_json');
        $categories = $service->getCategories();
        return $this->render('GOLFooterBundle:Footer:footer.html.twig', array(
            'categories' => $categories,
            'env' => $service->getEnv(),
        ));
    }
}

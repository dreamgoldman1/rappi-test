<?php

namespace GOL\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Clase Producto, encargado de la manipulación de productos
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class ProductoController extends Controller
{
    /**
     * Muestra el listado de todos los productos
     * @param Request $request
     * @param string $order
     * @return render
     */
    public function productosAction(Request $request,$order)
    {
        $service = $this->get('gol_api.api_json');
        if ($request->getMethod() == 'POST'){
            $products = $service->getProductByName($request->get('producto'));
        }else{
            $products = $service->getProducts();
        }
        
        if ($order == 'nomasc'){
            $products = $this->ordenarNombreAscendente($products);
        }elseif ($order == 'nomdesc'){
            $products = $this->ordenarNombreDescendente($products);
        }elseif ($order == 'preasc'){
            $products = $this->ordenarPrecioAscendente($products);
        }elseif ($order == 'predesc'){
            $products = $this->ordenarPrecioDescendente($products);
        }elseif ($order == 'mendiez'){
            $products = $this->filtrarMenorDiez($products);
        }elseif ($order == 'maytre'){
            $products = $this->filtrarMayorTreinta($products);
        }
                
        return $this->render('GOLContentBundle:Producto:productos.html.twig', array(
            'order' => $order,
            'products' => $products,
            'totalProductos' => count($products),
            'env' => $service->getEnv(),
        ));
    }
    
    /**
     * Muestra el listado de productos por categoria
     * @param integer $categoryId
     * @param string $order
     * @return render
     */
    public function productosCategoryAction($categoryId, $order)
    {
        $service = $this->get('gol_api.api_json');
        $categories = $service->getCategories();
        $products = $service->getProductsByCategory($categoryId);
        
        if ($order == 'nomasc'){
            $products = $this->ordenarNombreAscendente($products);
        }elseif ($order == 'nomdesc'){
            $products = $this->ordenarNombreDescendente($products);
        }elseif ($order == 'preasc'){
            $products = $this->ordenarPrecioAscendente($products);
        }elseif ($order == 'predesc'){
            $products = $this->ordenarPrecioDescendente($products);
        }elseif ($order == 'mendiez'){
            $products = $this->filtrarMenorDiez($products);
        }elseif ($order == 'maytre'){
            $products = $this->filtrarMayorTreinta($products);
        }
        
        return $this->render('GOLContentBundle:Producto:productos.html.twig', array(
            'order' => $order,
            'categories' => $categories,
            'categoryId' => $categoryId,
            'products' => $products,
            'totalProductos' => count($products),
            'env' => $service->getEnv(),
        ));
    }
    
    /**
     * Muestra los producto que no estan disponibles
     * @param string $order
     * @return render
     */
    public function productosAgotadosAction($order)
    {
        $service = $this->get('gol_api.api_json');
        $products = $service->getProductsUnavailable();

        if ($order == 'nomasc'){
            $products = $this->ordenarNombreAscendente($products);
        }elseif ($order == 'nomdesc'){
            $products = $this->ordenarNombreDescendente($products);
        }elseif ($order == 'preasc'){
            $products = $this->ordenarPrecioAscendente($products);
        }elseif ($order == 'predesc'){
            $products = $this->ordenarPrecioDescendente($products);
        }elseif ($order == 'mendiez'){
            $products = $this->filtrarMenorDiez($products);
        }elseif ($order == 'maytre'){
            $products = $this->filtrarMayorTreinta($products);
        }
        
        return $this->render('GOLContentBundle:Producto:productos.html.twig', array(
            'order' => $order,
            'products' => $products,
            'agotados' => 'Agotados',
            'totalProductos' => count($products),
            'env' => $service->getEnv(),
        ));
    }
    
    /**
     * Muestra los productos Best Seller
     * @param string $order
     * @return render
     */
    public function productosMasVendidosAction($order)
    {
        $service = $this->get('gol_api.api_json');
        $products = $service->getProductsBestSeller();
        
        if ($order == 'nomasc'){
            $products = $this->ordenarNombreAscendente($products);
        }elseif ($order == 'nomdesc'){
            $products = $this->ordenarNombreDescendente($products);
        }elseif ($order == 'preasc'){
            $products = $this->ordenarPrecioAscendente($products);
        }elseif ($order == 'predesc'){
            $products = $this->ordenarPrecioDescendente($products);
        }elseif ($order == 'mendiez'){
            $products = $this->filtrarMenorDiez($products);
        }elseif ($order == 'maytre'){
            $products = $this->filtrarMayorTreinta($products);
        }
        
        return $this->render('GOLContentBundle:Producto:productos.html.twig', array(
            'order' => $order,
            'products' => $products,
            'masVendidos' => 'Más Vendidos',
            'totalProductos' => count($products),
            'env' => $service->getEnv(),
        ));
    }
    
    /**
     * Muestra la página de detalle de un producto
     * @param integer $productId
     * @return render
     */
    public function productoDetalleAction($productId) {
        $service = $this->get('gol_api.api_json');
        $product = $service->getProductById($productId);
        $categories = $service->getCategories();
        return $this->render('GOLContentBundle:Producto:producto-detalle.html.twig', array(
            'product' => $product,
            'categories' => $categories,
            'env' => $service->getEnv(),
        ));
    }
    
    //============= Funciones genéricas ===================
    /**
     * Función para ordenar los productos por nombre ascendente
     * @param array $products
     * @return array
     */
    public function ordenarNombreAscendente($products) {
        $productsTmp = array();
        foreach ($products as $product){
            $productsTmp[] = $product;
        }
        $products = $productsTmp;
        
        $n = count($products) -1 ;
        for ($i = 1; $i <= $n; $i++){
            for ($j = 0; $j <= $n-$i; $j++){
                if (isset($products[$j+1]) && !empty($products[$j+1])){
                    if (strcmp($products[$j]['name'], $products[$j+1]['name']) > 0){
                        $aux = $products[$j];
                        $products[$j] = $products[$j+1];
                        $products[$j+1] = $aux;
                    }                    
                }
            }
        }
        return $products;
    }
    
    /**
     * Función para ordenar los productos por nombre descendente
     * @param array $products
     * @return array
     */
    public function ordenarNombreDescendente($products) {
        $products = $this->ordenarNombreAscendente($products);
        $products = array_reverse($products);
        return $products;
    }
    
    /**
     * Función para ordenar los productos por precio ascendente
     * @param array $products
     * @return array
     */
    public function ordenarPrecioAscendente($products) {
        $productsTmp = array();
        foreach ($products as $product){
            $productsTmp[] = $product;
        }
        $products = $productsTmp;
        
        $n = count($products) -1 ;
        for ($i = 1; $i <= $n; $i++){
            for ($j = 0; $j <= $n-$i; $j++){
                if (isset($products[$j+1]) && !empty($products[$j+1])){
                    if ($products[$j]['price'] > $products[$j+1]['price']){
                        $aux = $products[$j];
                        $products[$j] = $products[$j+1];
                        $products[$j+1] = $aux;
                    }                    
                }
            }
        }
        return $products;
    }
    
    /**
     * Función para ordenar los productos por precio descendente
     * @param array $products
     * @return array
     */
    public function ordenarPrecioDescendente($products) {
        $products = $this->ordenarPrecioAscendente($products);
        $products = array_reverse($products);
        return $products;
    }
    
    /**
     * Función para ordenar los productos por precio < 10.000
     * @param array $products
     * @return array
     */
    public function filtrarMenorDiez($products) {
        foreach ($products as $key => $product){
            if ($product['price'] >= '10000'){
                unset($products[$key]);
            }
        }
        return $products;
    }
    
    /**
     * Función para ordenar los productos por precio > 30.000
     * @param array $products
     * @return array
     */
    public function filtrarMayorTreinta($products) {
        foreach ($products as $key => $product){
            if ($product['price'] <= '30000'){
                unset($products[$key]);
            }
        }
        return $products;
    }
}

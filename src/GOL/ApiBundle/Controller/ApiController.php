<?php

namespace GOL\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Clase Api, como servicio para consumo de recursos del Json
 * 
 * Clase que hace las función de los modelos
 * al no haber persistencia trae todos los datos del Json
 * 
 * @author Gilberto Orozco Linero
 * @author http://cv.gilbertoorozco.net
 */
class ApiController extends Controller
{
    /**
     * Propiedades para la lectura del archivo Json
     */
    public $configPath;
    public $configFile;
    public $dirPath;
    public $file;

    /**
     * Se iniciliza la lectura de los datos del archivo Json
     * @return string Contenido del archivo Json 
     */
    public function __construct() {
        $this->dirPath = __DIR__ . "/../../../../web/docs/json";
        $this->configPath = __DIR__ . "/../../../../web/config";
        
        $this->configFile = file_get_contents($this->configPath . "/config.json");
        $this->configFile = json_decode($this->configFile);
        
        if ($this->configFile->fuenteType == 'url'){
            $this->file = file_get_contents($this->configFile->fuente);
        }elseif($this->configFile->fuenteType == 'file'){
            $this->file = file_get_contents($this->dirPath . "/" . $this->configFile->fuente);
        }        
        return $this->file;
    }
    
    /**
     * Función para testeos
     * @return string
     */
    public function apiAction()
    {
        //$this->getProductByName('o');
        return $this->render('GOLApiBundle:Api:api.html.twig');
    }
    
    // ========= Categorias ==================
    /**
     * Retorna las categorias del archivo Json
     * @return array Con las categorias y sus id's
     */
    public function getCategories()
    {
        $response = json_decode($this->file, TRUE);
        return $response['categories'];
    }
    
    /**
     * Retorna la cantidad de productos de una categoria en el archivo Json
     * @return array Con la categoria Id y la cantidad de productos
     */
    public function getQtyProductsByCategory()
    {
        $count = array();
        $categories = $this->getCategories();
        $products = $this->getProducts();
        
        // Inicializo contador para cada categoria
        foreach ($categories as $category){
            $count[$category['categori_id']] = 0;
        }
        
        // Incremento en 1 el contador de cada categoria a la que pertenece el producto
        foreach ($products as $product){
            foreach ($product['categories'] as $productCategory){
                $count[$productCategory]++;
            }
        }
        return $count;
    }
    
    // ========= Productos ==================
    /**
     * Retorna todos los productos del archivo Json
     * @return array de todos los productos
     */
    public function getProducts()
    {
        $response = json_decode($this->file, TRUE);
        $index = 0;
        foreach ($response['products'] as $key => $producto){
            $response['products'][$key]['price'] = str_replace('.', '', $response['products'][$key]['price']);
        }
        return $response['products'];
    }
    
    /**
     * Función para traer los datos de un producto por su Id 
     * @param integer $productId
     * @return array Con los datos del producto
     */
    public function getProductById($productId)
    {
        $response = json_decode($this->file, TRUE);
        foreach ($response['products'] as $product){
            if ($product['id'] == $productId){
                $finalProducto = $product;
            }
        }
        foreach ($finalProducto as $producto){
            $finalProducto['price'] = str_replace('.', '', $finalProducto['price']);
        }
        return $finalProducto;
    }
    
    /**
     * Función para traer los datos de un producto por su Nombre
     * @param array $producto
     * @return array Con los datos del producto
     */
    public function getProductByName($producto)
    {
        $response = json_decode($this->file, TRUE);
        $finalProducto = array();
        foreach ($response['products'] as $product){
            $pos = strpos($product['name'], $producto);
            if ($pos !== false) {
                $finalProducto[] = $product;
            }
        }
        foreach ($finalProducto as $key => $producto){
            $finalProducto[$key]['price'] = str_replace('.', '', $finalProducto[$key]['price']);
        }
        return $finalProducto;
    }
    
    /**
     * Retorna todos los productos de una categoria dada del archivo Json
     * @param integer $categoryId el Id de la categoria
     * @return array de productos de la categoria
     */
    public function getProductsByCategory($categoryId)
    {
        $products = $this->getProducts();
        $finalProducts = array();
        foreach ($products as $product){
            if (in_array($categoryId, $product['categories'])){
                $finalProducts[] = $product;
            }
        }
        
        foreach ($finalProducts as $key => $producto){
            $finalProducts[$key]['price'] = str_replace('.', '', $finalProducts[$key]['price']);
        }
        return $finalProducts;
    }
    
    /**
     * Retorna solo los productos disponibles del archivo Json
     * @return array con listado de productos disponibles
     */
    public function getProductsAvailable()
    {
        $response = json_decode($this->file, TRUE);
        $index = 0;
        foreach ($response['products'] as $product){
            if (!$product['available']){
                unset($response['products'][$index]);
            }
            $index++;
        }
        
        foreach ($response['products'] as $key => $producto){
            $response['products'][$key]['price'] = str_replace('.', '', $response['products'][$key]['price']);
        }
        return $response['products'];
    }
    
    /**
     * Retorna solo los productos NO disponibles del archivo Json
     * @return array con listado de productos No disponibles
     */
    public function getProductsUnavailable()
    {
        $response = json_decode($this->file, TRUE);
        $index = 0;
        foreach ($response['products'] as $product){
            if ($product['available']){
                unset($response['products'][$index]);
            }
            $index++;
        }
        
        foreach ($response['products'] as $key => $producto){
            $response['products'][$key]['price'] = str_replace('.', '', $response['products'][$key]['price']);
        }
        return $response['products'];
    }
    
    /**
     * Retorna solo los productos más vendidos del archivo Json
     * @return type con los productos más vendidos
     */
    public function getProductsBestSeller()
    {
        $response = json_decode($this->file, TRUE);
        $index = 0;
        foreach ($response['products'] as $product){
            if (!$product['best_seller']){
                unset($response['products'][$index]);
            }
            $index++;
        }
        
        foreach ($response['products'] as $key => $producto){
            $response['products'][$key]['price'] = str_replace('.', '', $response['products'][$key]['price']);
        }
        return $response['products'];
    }
    
    /**
     * Función generica para consultar el ambiente del proyecto (dev o prod)
     * @global type $kernel
     * @return string
     */
    public function getEnv() {
        global $kernel;
        return $kernel->getEnvironment() == "prod" ? "/" : "/app_dev.php/";
    }
    
    /**
     * Para el tratamiento de la fuente del Json
     * @param Request $request
     * @return render
     */
    public function adminAction(Request $request){
        $mensaje = '';
        if ($request->getMethod() == 'POST'){
            $configData = array();
            if ($request->get('fuente') == 'url'){
                $configData = array(
                    'fuenteType' => $request->get('fuente'),
                    'fuente' => $request->get('url')
                );
            }elseif ($request->get('fuente') == 'file'){
                foreach ($request->files as $uploaded){
                    $fileName = $uploaded->getClientOriginalName();
                    $ext = explode('.',$fileName);
                    if ($ext[1] == 'json'){
                        $file = $uploaded->move($this->dirPath,"/".$fileName);
                        $configData = array(
                            'fuenteType' => $request->get('fuente'),
                            'fuente' => $fileName,
                        );
                    }else{
                        return $this->render('GOLApiBundle:Api:admin.html.twig', array(
                            'env' => $this->getEnv(),
                            'mens' => 'La extensión del archivo debe ser .json',
                            'class' => 'danger',
                        ));
                    }
                }
            }
            $configData = json_encode($configData);
            
            $configFile = fopen($this->configPath . "/config.json", "w+");
            fwrite($configFile, $configData);
            fclose($configFile);
            $mensaje = 'Actualización exitosa';
        }
        return $this->render('GOLApiBundle:Api:admin.html.twig', array(
            'mens' => $mensaje,
            'env' => $this->getEnv(),
            'class' => 'success',
        ));
    }
}

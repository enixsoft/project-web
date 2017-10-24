<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
 

    public function insertAction()
    {
    	$product = new Products();
    	$product->productID = mt_rand(100000, 999999);
    	$product->productName = str_random(5);
        $product->productPrice = mt_rand(100,1000);
        $product->productDescription = str_random(5);
    	$product->save();          
    }


     public function updateAction($id, $productid, $name, $price, $description)
    {
    	$product = Products::where("id", "=", $id);
        $product->update(["productID" => $productid]);        
    	$product->update(["productName" => $name]);
        $product->update(["productPrice" => $price]);
        $product->update(["productDescription" => $description]);
    }

        public function deleteAction($id)
    {
        $products = Products::find($id);    	
    	$products->delete();
    }

   public function showAllAction()
    {
    	$products = Products::all();
    	return $products;
    }





}





?>

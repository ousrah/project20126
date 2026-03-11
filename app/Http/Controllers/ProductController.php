<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
   {
    $categorie = "Electromangers";
    return view('products.index',['categorie'=>$categorie]);
   }

   public function test()
   {
     $products = Product::with('category')->get(); // Renvoie une Collection d'objets Product
  
      
      // 1. Récupérer TOUS les produits
//$products = Product::all(); // Renvoie une Collection d'objets Product

// 2. Trouver un produit par sa clé primaire (id)
//$product = Product::with('category')->find(5); // Renvoie un seul objet Product, ou null s'il n'est pas trouvé
//$product = Product::where('id',5)->get();

// 3. Trouver un produit ou échouer (génère une erreur 404 si non trouvé) - MEILLEURE PRATIQUE
//$product = Product::with('category')->findOrFail(5);

// // 4. Construire une requête plus complexe

// $products = Product::with('category')
//                   ->where('is_active', true)
//                   ->orderBy('price', 'desc')
//                   ->take(10)
//                   ->get(); // ->get() exécute la requête et renvoie une Collection

// // 5. Obtenir le premier résultat d'une requête
//$product = Product::where('price', '>', 500)->first();


return view('products.index',compact('products'));
   //   return view('products.index',compact('products'));
   }


   public function contacts()
   {
    $title = "page des contacts";
    $contacts = [];
   // return view('contacts',['title'=>$title, 'contacts'=>$contacts]);
    return view('contacts',compact('title','contacts'));
   
   
   }

   public function create()
   {


      $newProduct = Product::create([
         'name' => 'Nouveau Clavier Mécanique',
         'price' => 149.99,
         'stock' => 150,
         'category_id' => 1
     ]);

     return view('products.show',['product'=>$newProduct]);


   }
   public function update()
   {
      $productToUpdate = Product::findOrFail(103);
// $productToUpdate->stock = 75;
// $productToUpdate->is_active = false;
// $productToUpdate->save();

// $productToUpdate->update([
 
//    'price' => 169,
//    'stock' => 76,
//    'is_active' => true
// ]);

Product::where('stock', '<', 100)->update(['is_active' => false]);

//Product::query()->update(['price' => DB::raw('price*1.1')]);
$products = Product::all();



return view('products.index',['products'=>$products]);

   }
   public function delete()
   {

     // $productToDelete = Product::findOrFail(1);
     // $productToDelete->delete();
      
      // Méthode 2: Suppression par clé primaire
     //  Product::destroy(2);
      
      // // Méthode 3: Suppression en masse
   Product::where('is_active', false)->delete();


   //a eviter de faire ce genre de boucles
   //   $productsToDelete = Product::where('is_active', true)
   //                               ->where('price','>',200)
   //                               ->get();
   //   foreach ($productsToDelete as $product)
   //   {
   //       $product->delete();
   //   }



      $products = Product::all();



      return view('products.index',['products'=>$products]);
   }

}

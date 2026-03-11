
<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
      </head>
    <body>
      Fiche de produit 

      <div class="overflow-x-auto justify-center">
        <table class="w-2/3 border border-gray-200 rounded-lg overflow-hidden">
          
          <thead class="bg-gray-100">
            <tr>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">id</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">nom</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">prix</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">stock</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">is_active</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">categorie</th>
           
            </tr>
          </thead>
      
          <tbody class="divide-y divide-gray-200 bg-white">
            
             
      
      
        <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->id}}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->name}}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->price}}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->stock}}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->is_active}}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{$product->category?$product->category->name:'-'}}</td>
          </tr>
       
      </table>
    </body>
</html>

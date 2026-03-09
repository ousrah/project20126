
<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>{{$title}}</title>
    </head>
    <body>
     <h1> Liste des contacts</h1>
      <table>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>email</td>
            <td>telephone</td>
        </tr>

      @forelse ($contacts as $contact)

      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->nom}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->telephone}}</td>
        </tr>
    
        @empty
            <tr>
                <td colspan=4>Aucun Contact disponible</td>
            </tr>

      @endforelse
    </table>
    </body>
</html>

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

//importa el modelo Cliente
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        // se llama a la API externa
        $url = "https://randomuser.me/api/";
        $response = Http::get($url);

        // verifica si recive los datos correctamente
        if ($response->status() == 200) {
                    $data = $response->json();
            
            // se guardan los clientes en la bd
            foreach ($data['results'] as $cliente) {
                Cliente::create([
                    'Nombre'    => $cliente['name']['first'],           // Nombre
                    'Apellido'  => $cliente['name']['last'],            // Apellido
                    'Edad'      => $cliente['dob']['age'],              // Edad
                    'Genero'    => $cliente['gender'],                  // Genero
                    'Email'     => $cliente['email'],                   // Email
                    'Pais'      => $cliente['location']['country'],     // Pais
                    'Ciudad'    => $cliente['location']['city'],        // Ciudad
                    'Foto'      => $cliente['picture']['large'],        // Foto
                ]);
            }

            $clientes = Cliente::all();
            
        return view('clientes', compact('clientes'));
        } else {
            //msg de error
            return response()->json(['error' => 'Error al obtener los datos'], $response->status());
        }

    }

    public function Crear()
    {
        return view('crear');
    }

    public function Guardar(Request $request)
    {
        //validacion de datos para guardar
        $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Edad' => 'required|integer|min:1|max:101',
            'Genero' => 'required|in:male,female',
            'Email' => 'required|email',
            'Pais' => 'required|string',
            'Ciudad' => 'required|string',
        ]);

        Cliente::create($request->all());

        return redirect('/');
    }

    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('editar', compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Edad' => 'required|integer|min:1|max:101',
            'Genero' => 'required|in:male,female',
            'Email' => 'required|email',
            'Pais' => 'required|string',
            'Ciudad' => 'required|string',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect('/');
    }

    public function Eliminar($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        
        return redirect('/');
    }

}


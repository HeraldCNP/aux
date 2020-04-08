<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Persona;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        $users->each(function($u){
            $u->persona;
        });

//        dd($users[0]->persona->name);
        return view('admin.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->email = $request->email;
        $pass1 = $request->password;
        $pass2 = $request->password2;
        $usuario->password = bcrypt($request->password);
        if ($pass1 == $pass2){
            $usuario->save();
        }else{
            return redirect('usuarios/create')->with('warning', 'las contraseñas no coinciden');
        }
        $usuario->save();
        $user = User::orderBy('id', 'DESC')->limit(1)->get();
        $persona = new Persona();
        $persona->name = $request->name;
        $persona->lastname = $request->lastname;
        $persona->phone = $request->phone;
        $persona->address = $request->address;
        $persona->face = $request->face;
        $persona->idUser = $user[0]->id;
        $persona->save();

        return redirect('usuarios')->with('success', 'Usuario Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
//        dd($id);
        $user = User::findorfail($id);
        return view('admin.usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::where('idUser', $id)->get();
        $persona = Persona::findorfail($persona[0]->id);
        $persona->name = $request->name;
        $persona->lastname = $request->lastname;
        $persona->phone = $request->phone;
        $persona->address = $request->address;
        $persona->face = $request->face;
        $persona->save();
        $user = User::find($id);
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect('usuarios')->with('success', 'Usuario Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        $persona = Persona::where('idUser', $id)->get();
        $persona = Persona::findorfail($persona[0]->id);
        $persona->delete();
        User::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success','Usuario Eliminado Correctamente');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Usuario extends Component
{
    use WithPagination;
    public $alertTitle;
    public $searchTitle;

    public $name;
    public $email;
    public $password;

    public $user;
    public $error = false;
    public function render()
    {

        $usuarios = User::query()
        ->when($this->searchTitle,function($query){
            $query->where('name','like','%'.$this->searchTitle.'%');
        })->orderBy('id','desc')->paginate(10)->withPath('/admin/usuario');
        return view('livewire.usuario',compact('usuarios'));
    }
    public function create()
    {
        $this->reset('name','email','password','user');
        $this->dispatchBrowserEvent('create');
    }
    public function edit(User $user)
    {
        $this->user = $user;

        $this->name     = $user->name;
        $this->email    = $user->email;
        $this->password = '';

        $this->dispatchBrowserEvent('edit');
    }
    public function delete_modal(User $user)
    {
        $this->user = $user;
        $this->dispatchBrowserEvent('delete');
    }

    public function delete(User $user)
    {
        User::destroy($this->user->id);
       $this->alertTitle = $this->user->name;
       $this->dispatchBrowserEvent('alertdelete');
       $this->dispatchBrowserEvent('close_delete');
       $this->render();
       $this->reset('user');
    }

    public function update()
    {
        $params = [
            'name'      => $this->name,
            'email'     => $this->email,
        ];
        $validator = Validator::make($params, [
            'email' => Rule::unique('users')->ignore($this->user->id),
            // 'password' => 'required'
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.unique' => 'El mail ya ha sido registrado.',
            'password.required' => 'El campo de contraseña es obligatorio.'
        ]);

        if($this->password){
            $params['password'] = Hash::make($this->password);
        }
        if ($validator->fails()) {
            $this->dispatchBrowserEvent('close_edit');

            $this->alertTitle = $validator->errors()->first();
            $this->dispatchBrowserEvent('alertupdate');
            $this->reset('name','email','password');
            $this->error = true;
            return;
        }else{
            $this->error = false;
        }

        User::where('id', $this->user->id)
        ->update($params);

        $this->dispatchBrowserEvent('close_edit');

        $this->alertTitle = $this->name;
        $this->dispatchBrowserEvent('alertupdate');
        $this->reset('name','email','password');
    }

    public function save()
    {
        $params = [
            'name'      => $this->name,
            'email'     => $this->email,
            'password'     => $this->password,
        ];
        $validator = Validator::make($params, [
            'email' => Rule::unique('users'),
            'password' => 'required'
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.unique' => 'El mail ya ha sido registrado.',
            'password.required' => 'El campo de contraseña es obligatorio.'
        ]);
        if($this->password){
            $params['password'] = Hash::make($this->password);
        }

        if ($validator->fails()) {
            $this->dispatchBrowserEvent('close_create');

            $this->alertTitle = $validator->errors()->first();
            $this->dispatchBrowserEvent('alertdelete');
            $this->reset('name','email','password');
            $this->error = true;
            return;
        }else{
            $this->error = false;
        }

        $cursos = User::create($params);

        $this->dispatchBrowserEvent('close_create');

        $this->alertTitle = $this->name;
        $this->dispatchBrowserEvent('alertcreate');
        $this->reset('name','email','password');
    }
}

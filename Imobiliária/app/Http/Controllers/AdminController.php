<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Client;
use App\Models\Pending;
use App\Models\Property;
use App\Models\Sale;
use App\Models\Sold;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Faker\Provider\Lorem;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use \Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    public function viewCeo() {

        $clientsCount = Client::count();
        $clientsPendingCount = Pending::where('pending', 'yes')->count();
        $propertiesCount = Property::where('sold', 'no')->count();
        $propertiesSoldCount = Property::where('sold', 'yes')->count();
        $clientsBuyCount = Sold::distinct('client_id')->count('client_id');;

        $total = Sold::with('property')->get()->sum('property.price');
        $formatTotal = number_format($total, 3);
        
        return view("site.ceo", compact('clientsCount', 'propertiesCount', 'clientsBuyCount', 'formatTotal', 'propertiesSoldCount', 'clientsPendingCount'));

    }

    public function viewPropertiesList(Request $request) {
        $search = $request->input('search');

        if ($request->has('search')) {
            $properties = Property::where('propertyType', 'like', "%$request->search%")->where('sold', 'no')
            ->orWhere('id', "$request->search")->where('sold', 'no')
            ->orWhere('neighborhood', 'like', "%$request->search%")->where('sold', 'no')
            ->orWhere('city', 'like', "%$request->search%")->where('sold', 'no')
            ->orWhere('street', 'like', "%$request->search%")->where('sold', 'no')->paginate(10);
        } else {
            $properties = Property::where('sold', 'no')->paginate(10);
        }

        return view('site.Imovel.listaImovel', ['properties' => $properties, 'search' => $search]);

    }

    public function viewCreateProperty() {

        return view('site.Imovel.registrarImovel');

    }
    
    public function createProperty(Request $request) {

        $user_id = auth()->user()->id;

        $newProperty = [
            'user_id' => $user_id,
            'price' => $request->price,
            'propertyType' => $request->propertyType,
            'condominium' => $request->condominium,
            'iptu' => $request->iptu,
            'street' => $request->street,
            'city' => $request->city,
            'neighborhood' => $request->neighborhood,
            'number' => $request->number,
            'state' => $request->state,
            'squareMeters' => $request->squareMeters,
            'bedrooms' => $request->bedrooms,
            'bathroom' => $request->bathroom,
            'carSpaces' => $request->carSpaces,
            'description' => $request->description,
            'sold' => 'no',
            'mainPhoto' => $request->mainPhoto,
            'photos' => $request->photos,
        ];
        
        if ($request->hasFile('mainPhoto') && $request->file('mainPhoto')->isValid()) {
            $newProperty['mainPhoto'] = $this->uploadImage($request->file('mainPhoto'));
        }
    
        if (isset($request->photos)) {
            $newProperty['photos'] = $this->uploadMultipleImages($request->file('photos'));
        }

        $property = Property::create($newProperty);

        return redirect('/lista/imovel')->with('msg', 'Propriedade registrada com sucesso!');

    }

    public function viewEditProperty($id) {

        $property = Property::findOrFail($id);

        return view('site.Imovel.editarImovel', ['property' => $property]);

    }

    public function editProperty(Request $request, $id) {

        $property = Property::findOrFail($id);
        $user_id = auth()->user()->id;

        $data = [
            'user_id' => $user_id,
            'price' => $request->price,
            'propertyType' => $request->propertyType,
            'condominium' => $request->condominium,
            'iptu' => $request->iptu,
            'street' => $request->street,
            'city' => $request->city,
            'neighborhood' => $request->neighborhood,
            'number' => $request->number,
            'state' => $request->state,
            'squareMeters' => $request->squareMeters,
            'bedrooms' => $request->bedrooms,
            'bathroom' => $request->bathroom,
            'carSpaces' => $request->carSpaces,
            'description' => $request->description,
        ];
    
        if(isset($request->mainPhoto)) {
            $mainPhoto = ['mainPhoto' => $request->mainPhoto];
            if ($request->hasFile('mainPhoto') && $request->file('mainPhoto')->isValid()) {
                $mainPhoto['mainPhoto'] = $this->uploadImage($request->file('mainPhoto'));
                $property->update($mainPhoto);
            }
        }
    
        if (isset($request->photos)) {
            $photos = ['photos' => $request->photos];
            $data['photos'] = $this->uploadMultipleImages($request->file('photos'));
            $property->update($photos);
        }
    
        $property->update($data);
    
        return redirect('/lista/imovel')->with('msg', 'Propriedade editada com sucesso!');

    }

    public function deleteProperty($id) {

        $property = Property::findOrFail($id);

        $property->delete();

        return redirect('/lista/imovel');

    }
    
    ////////////////////////////////////////// Usuario ///////////////////////////////////////
    
    public function viewUserList(Request $request) {
        $search = $request->input('search');

        if ($request->has('search')) {

            $users = User::where('name', 'like', "%$request->search%")->where('permission', '<=', 3)
            ->orWhere('email', 'like', "%$request->search%")->where('permission', '<=', 3)
            ->orWhere('id', "$request->search")->where('permission', '<=', 3)->paginate(12);

        } else {

            $users = User::where('permission', '<=', 3)->paginate(12);

        }

        return view('site.Usuario.listaUsuario', ['users' => $users, 'search' => $search]);

    }

    public function viewUserCreate(Request $request) {

        return view('site.Usuario.registrarUsuario');

    }

    public function userCreate(Request $request): RedirectResponse {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'permission' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'permission' => $request->permission,
        ]);

        event(new Registered($user));

        return redirect('/lista/usuario')->with('msg', 'Usuario criado com sucesso!');

    }

    public function viewUserEdit($id) {

        $user = User::findOrFail($id);

        return view('site.Usuario.editarUsuario', ['user' => $user]);

    }

    public function userEditPassword(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return Redirect('/lista/usuario')->with('msg', 'Senha alterada com sucesso!');
    }

    public function userEdit(Request $request, $id) {

        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255'],
        ]);

        $user = User::findOrFail($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'permission' => $request->permission,
        ];

        $user->update($data);

        return Redirect('/lista/usuario')->with('msg', 'Usuario editado com sucesso!');

    }

    public function userDelete($id) {

        $property = User::findOrFail($id);

        $property->delete();

        return redirect('/lista/usuario');

    }

    ///////////////////////////////////////////// Cliente ////////////////////////////////////////

    public function viewClientList(Request $request) {
        $search = $request->input('search');

        if ($request->has('search')) {
            $users = Client::where('name', 'like', "%$request->search%")
            ->orWhere('id', "$request->search")
            ->orWhere('cpf', 'like', "%$request->search%")
            ->orWhere('email', 'like', "%$request->search%")
            ->orWhere('phone', 'like', "%$request->search%")
            ->orWhere('neighborhood', 'like', "%$request->search%")
            ->orWhere('city', 'like', "%$request->search%")
            ->orWhere('street', 'like', "%$request->search%")->paginate(12);
        } else {
            $users = Client::paginate(12);
        }

        return view('site.Cliente.listaCliente', ['users' => $users, 'search' => $search]);

    }

    public function viewClientCreate() {

        return view('site.Cliente.registrarCliente');

    }

    public function clientCreate(Request $request): RedirectResponse {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Client::class],
            'phone' => ['required', 'string', 'max:255'],
            'birthDate' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'neighborhood' => ['required', 'string', 'max:255'],
            'numHouse' => ['required', 'string', 'max:255'],
        ]);

        $client = Client::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthDate' => $request->birthDate,
            'cpf' => $request->cpf,
            'city' => $request->city,
            'street' => $request->street,
            'neighborhood' => $request->neighborhood,
            'numHouse' => $request->numHouse,
        ]);

        event(new Registered($client));

        return redirect('/lista/cliente');

    }

    public function viewClientEdit($id) {

        $user = Client::findOrFail($id);

        return view('site.Cliente.editarCliente', ['user' => $user]);

    }

    public function clientEdit(Request $request, $id) {

        $client = Client::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'birthDate' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'neighborhood' => ['required', 'string', 'max:255'],
            'numHouse' => ['required', 'string', 'max:255'],
        ]);

        $data = [
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthDate' => $request->birthDate,
            'cpf' => $request->cpf,
            'city' => $request->city,
            'street' => $request->street,
            'neighborhood' => $request->neighborhood,
            'numHouse' => $request->numHouse,
        ];

        $client->update($data);

        return Redirect('/lista/cliente');

    }

    public function clientDelete($id) {

        $client = client::findOrFail($id);

        $client->delete();

        return redirect('/lista/cliente');

    }

    ////////////////////////////////////////// Venda /////////////////////////////////////////////////

    public function viewRegisterSale(Request $request) {

        $clientSearch = $request->input('client');
        $propertySearch = $request->input('property');
        $client = Client::where('id', "$clientSearch")
        ->orWhere('name', "$clientSearch")
        ->orWhere('email', "$clientSearch")
        ->orWhere('cpf', "$clientSearch")->first();
        $property = Property::where('id', "$propertySearch")->where('sold', 'no')
        ->orWhere('street', "$propertySearch")->where('sold', 'no')
        ->orWhere('number', "$propertySearch")->where('sold', 'no')->first();

        return view('site.Venda.registrarVenda', ['client' => $client, 'property' => $property]);

    }

    public function registerSale($clientId, $propertyId) {

        $register = New Sale;
        $register->client_id = $clientId;
        $register->property_id = $propertyId;
        $register->save();

        return redirect('/registrar/venda')->with('msg', 'Venda registrada com sucesso!');

    }

    public function viewSaleList() {

        $sales = Sale::with('client','property')->get();
        
        return view('site.Venda.listaVenda', ['sales' => $sales]);

    }

    public function moderateSale($clientId, $propertyId, $saleId) {

        $client = Client::findOrFail($clientId);
        $property = Property::findOrFail($propertyId);
        $sale = Property::findOrFail($saleId);

        return view('site.Venda.aprovarVenda', ['client' => $client, 'property' => $property, 'sale' => $sale]);

    }

    public function confirmSale($clientId, $propertyId, $saleId) {
        DB::beginTransaction();
    
        try {
            $register = new Sold;
            $register->user_id = auth()->user()->id;
            $register->client_id = $clientId;
            $register->property_id = $propertyId;
            $register->save();
    
            $property = Property::find($propertyId);
            $property->sold = 'yes';
            $property->save();
    
            $sale = Sale::findOrFail($saleId);
            $sale->delete();
    
            DB::commit();
    
            return redirect('/lista/venda')->with('msg', 'Venda confirmada com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
    
            return redirect('/lista/venda')->with('msg', 'Ocorreu um erro ao confirmar a venda. Por favor, tente novamente.');
        }
    }

    public function deleteSale($id) {

        $sale = Sale::findOrFail($id);
        $sale->delete();

        return redirect('/lista/venda');
    }

    /////////////////////////////////////////// Pendente ////////////////////////////////////////

    public function viewPendingList(Request $request) {
        $search = $request->input('search');

        if ($request->has('search')) {
            $pendings = Pending::where('name', 'like', "%$request->search%")->where('pending', 'yes')
            ->orWhere('id', "$request->search")->where('pending', 'yes')
            ->orWhere('email', 'like', "%$request->search%")->where('pending', 'yes')->paginate(12);
        } else {
            $pendings = Pending::where('pending', 'yes')->paginate(12);
        }

        return view('site.Pendente.listaPendente', ['pendings'=> $pendings, 'search'=> $search]);

    }

    public function updatePending(Request $request, $pending_Id) {

        $pending = Pending::findOrFail($pending_Id);
        $pending->pending = 'no';
        $pending->save();

        return redirect('/lista/pendente');
    }

    public function deletePending($id) {

        $pending = Pending::findOrFail($id);
        $pending->delete();

        return redirect('/lista/pendente');
    }

    //////////////////////////////////// Salvar Imagens ////////////////////////////

    private function uploadImage($file) {
        $extension = $file->extension();
        $imageName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $file->move(public_path('image/imoveis'), $imageName);
        return $imageName;
    }
    
    private function uploadMultipleImages($files) {
        $imageNames = [];

        foreach ($files as $file) {
            if ($file->isValid()) {
                $extension = $file->extension();
                $imageName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $file->move(public_path('image/imoveis'), $imageName);
                $imageNames[] = $imageName;
            }
        }
    
        return $imageNames;
    }

}

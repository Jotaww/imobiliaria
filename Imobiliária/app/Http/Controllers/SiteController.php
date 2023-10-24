<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Pending;
use App\Models\Property;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiteController extends Controller {
    
    public function viewHome() {

        $houses = Property::where('propertyType', 'Casa')->where('sold', 'no')->limit('4')->get();
        $apartments = Property::where('propertyType', 'Apartamento')->where('sold', 'no')->limit('4')->get();

        return view('site.home', ['houses' => $houses, 'apartments' => $apartments]);
        
    }

    public function viewProperty($id) {

        $property = Property::findOrFail($id);

        if($property->sold == 'yes') {
            return redirect('/');
        }

        return view('site.imovel', ['property' => $property]);

    }

    public function registerInfos(Request $request, $property_id) {

        $data = [
            'property_id' => $property_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pending' => 'yes',
        ];

        $pending = Pending::create($data);

        return back()->with('msg', 'Dados registrado com sucesso!');

    }

    public function viewCatalog(Request $request) {

        $query = Property::query();
        $filterLocation = $request->except('location');
        $filterType = $request->except('type');
        $filterPrice = $request->except('price');
        $filterMeters = $request->except('meters');
        $filterBedrooms = $request->except('bedrooms');
        $filterBathroom = $request->except('bathroom');
        $filterCar = $request->except('car');

        $type = $request->input('type');
        $location = $request->input('location');
        $price = $request->input('price');
        $meters = $request->input('meters');
        $bedrooms = $request->input('bedrooms');
        $bathroom = $request->input('bathroom');
        $car = $request->input('car');

        if ($location) {
            $query->where(function ($query) use ($location) {
                $query->where('street', 'like', '%' . $location . '%')
                      ->orWhere('neighborhood', 'like', '%' . $location . '%')
                      ->orWhere('city', 'like', '%' . $location . '%');
            });
        }
        if ($type) {
            $query->where('propertyType', $type == '1' ? 'Casa' : 'Apartamento');
        }
        if ($price) {
            if($price == '1') {
                $query->where('price', '<', 150.000);
            }
            if($price == '2') {
                $query->where('price', '<', 250.000);
            }
            if($price == '3') {
                $query->where('price', '<', 500.000);
            }
        }
        if ($meters) {
            if($meters == '1') {
                $query->where('squareMeters', '<=', 60);
            }
            if($meters == '2') {
                $query->where('squareMeters', '<=', 90);
            }
            if($meters == '3') {
                $query->where('squareMeters', '<=', 120);
            }
        }
        if ($bedrooms) {
            $query->where('bedrooms', "$request->bedrooms");
        }
        if ($bathroom) {
            $query->where('bathroom', "$request->bathroom");
        }
        if ($car) {
            $query->where('carSpaces', "$request->car");
        }

        $properties = $query->where('sold', 'no')->paginate(12);

        $count = $query->count();

        return view('site.catalog',compact('properties'), [
            'count' => $count,
            'filterLocation'=> $filterLocation,
            'filterType'=> $filterType,
            'filterPrice'=> $filterPrice,
            'filterMeters'=> $filterMeters,
            'filterBedrooms' => $filterBedrooms,
            'filterBathroom'=> $filterBathroom,
            'filterCar'=> $filterCar,
        ]);

    }

}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
use Illuminate\Support\Facades\Validator;


class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());
        // $form_data = $request->all();
        $newgift = Gift::create($form_data);
        return redirect()->route('gifts.show', $newgift->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        return view('gifts.show',compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        return view('gifts.edit', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gift = Gift::findOrFail($id);


        // $form_data = $request->all();

        $form_data = $this->validation($request->all());
        $gift->gift = $form_data['gift'];
        $gift->name = $form_data['name'];
        $gift->surname = $form_data['surname'];
        $gift->age = $form_data['age'];
        $gift->country = $form_data['country'];
        $gift->city = $form_data['city'];
        $gift->address = $form_data['address'];
        $gift->image = $form_data['image'];
        $gift->description = $form_data['description'];

        $gift->update();
        return redirect()->route('gifts.show', $gift->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect()->route('gifts.index');
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'gift' => 'required|min:3|max:50',
            'name' => 'required|min:3|max:50',
            'surname' => 'required|min:3|max:50',
            'age' => 'required',
            'country' => 'required|min:5|max:50',
            'city' => 'required|max:50',
            'address' => 'required|max:150',
            'image' => 'required|max:250',
            'description' => 'nullable',

        ], [
            'gift.required' => 'Il regalo è obbligatorio.',
            'gift.min' => 'Il regalo deve essere lungo almeno :min caratteri.',
            'gift.max' => 'Il regalo non può superare i :max caratteri.',
            'name.required' => 'Il nome è obbligatorio.',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome non può superare i :max caratteri.',
            'surname.required' => 'Il cognome è obbligatorio.',
            'surname.min' => 'Il cognome deve essere lungo almeno :min caratteri.',
            'surname.max' => 'Il cognome non può superare i :max caratteri.',
            'age.required' => 'L\'età è obbligatoria.',
            'country.required' => 'Il paese è obbligatorio.',
            'country.min' => 'Il paese deve essere lungo almeno :min caratteri.',
            'country.max' => 'Il paese non può superare i :max caratteri.',
            'city.required' => 'La città è obbligatorio.',
            'city.max' => 'La città non può superare i :max caratteri.',
            'address.required' => 'L\'indirizzo è obbligatorio.',
            'address.max' => 'L\'indirizzo non può superare i :max caratteri.',
            'image.required' => 'L\'immagine è obbligatorio.',
            'image.max' => 'L\'immagine non può superare i :max caratteri.',



        ])->validate();

        return $validator;
    }

}

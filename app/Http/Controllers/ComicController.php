<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // Mostra tutti i fumetti
    public function index()
    {
        $comics = Comic::all(); // Recupera tutti i fumetti dal database
        return view('comics.index', compact('comics')); // Passa i fumetti alla vista index
    }

    // Mostra un singolo fumetto
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic')); // Passa il fumetto selezionato alla vista show
    }

    // Mostra il form per creare un nuovo fumetto
    public function create()
    {
        return view('comics.create'); // Mostra la vista per creare un nuovo fumetto
    }

    // Salva un nuovo fumetto
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date_format:Y-m-d', // Valida che la data sia nel formato corretto
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required',
        ]);

        // Codifica gli artisti e gli scrittori come stringhe JSON
        $data['artists'] = json_encode($data['artists']);
        $data['writers'] = json_encode($data['writers']);

        // Crea un nuovo record nel database
        Comic::create($data);

        return redirect()->route('comics.index'); // Reindirizza all'elenco dei fumetti
    }

    // Mostra il form per modificare un fumetto esistente
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic')); // Passa il fumetto alla vista edit
    }

    // Aggiorna un fumetto esistente
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date_format:Y-m-d', // Valida che la data sia nel formato corretto
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required',
        ]);

        // Codifica gli artisti e gli scrittori come stringhe JSON
        $data['artists'] = json_encode($data['artists']);
        $data['writers'] = json_encode($data['writers']);

        // Aggiorna il record nel database
        $comic->update($data);

        return redirect()->route('comics.show', $comic); // Reindirizza alla vista del fumetto aggiornato
    }

    // Elimina un fumetto
    public function destroy(Comic $comic)
    {
        $comic->delete(); // Elimina il fumetto dal database
        return redirect()->route('comics.index'); // Reindirizza all'elenco dei fumetti
    }
}

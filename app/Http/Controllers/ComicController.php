<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importare il model che conterra i dati del database 
use App\Models\Comic;

// NB SI USA IL REDIRECT QUANDO NON DEVI MODIFICARE ELEMENTI IN DATABASE 
// SI USA VIEW QUANDO NON DEVI MODIFICARE 

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // importare i dati nella nella cartella pages  file index con il compact usando il metodo index
        $comics = Comic::all();
        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // con ilmetodo create si mostra il file create dentro alla cartella pages e va in combinazione con il metodo store  
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // metodo store si prende tutti i dati che ci sono dentro nel form e si crea una nuova row nel database con questi dati 
        $data = $request->all();
        $newComic = new Comic();

        // nelle quadre si mettono i rag name che si hanno nel form
        $newComic->nome = $data['nome'];
        $newComic->prezzo = $data['prezzo'];
        $newComic->voto = $data['voto'];
        // si salva lanuova row 
        $newComic->save();
        // e qua non si fa vedere una nuova pagina se si vuolema si ritorna alla pagina principale
        return redirect()->route('users.index');
        // return redirect() -> route('users.show', $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // usando il metodo show si prende l'id e si mostra a schermo sulla pagina show nella cartella pages show
        $comic = Comic::find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('pages.edit', compact('comic'));
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
        // vengono passati du eparametri qua la request dove ci sono i nuovi dati dell'elemento specifico e l'id che si riferisce all'elemento cliccato 
        // è una fusione tra metodo store e show
        $comic = Comic::find($id);
        $data = $request->all();
        $comic->nome = $data['nome'];
        $comic->prezzo = $data['prezzo'];
        $comic->voto = $data['voto'];
        // si salva lanuova row 
        $comic->save();
        // e qua non si fa vedere una nuova pagina se si vuolema si ritorna alla pagina principale
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // qua viene passato solo l'id che deve essere eliminato 
        $deleteComic = Comic::find($id);
        $deleteComic->delete();
        return redirect()->route('users.index');
    }
}

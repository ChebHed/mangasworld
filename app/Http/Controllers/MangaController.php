<?php

namespace App\Http\Controllers;
use Request;
use Session;

use App\Models\Manga;
use App\Models\Dessinateur;
use App\Models\Genre;
use App\Models\Scenariste;

use Validator;


class MangaController extends Controller
{
    public function getMangas()
    {
        //on récupere la liste de tous les mangas
        $mangas=Manga::all();
        //on affiche la liste de ces mangas
        return view ('listeMangas', compact('mangas'));
    }
    
    
    
    
    /** 
     * afficher la liste de tous les mangas d'un genre
       @param int $idGenre ID du genre
     * @return vue listerMangas     */
    
    
    public function getMangasGenre()
    {
        $erreur = "";
        //on recup l'id du genre selectionné
        $id_genre=Request::input('cbGenre');
        //si on a un id de genre
        if($id_genre){
            //on recup la liste de tous les mangas du genre choisi
            $mangas = Manga::where('id_genre', $id_genre)->get();
            //on affiche la liste de ces mangas
            return view ('listeMangas', compact('mangas', 'erreur'));
        }else{
            $erreur="il faut selectionner un genre !";
            return redirect('/listerGenres/'.$erreur);
        }
        
    }
    
    
    

    public function addManga($erreur =""){
        $erreur=Session::get('erreur');
        Session::forget('erreur');
        $manga = new Manga();
        $genres = Genre::all();
        $dessinateurs=Dessinateur::all();
        $scenaristes=Scenariste::all();
        $titreVue="Ajout d'un Manga";
        //Affiche le formulaire en lui fournissant les données à afficher
        return view ('formManga', compact('manga', 'genres', 'dessinateurs', 
                        'scenaristes', 'titreVue', 'erreur'));
    }


    public function deleteManga($id){
        $erreur="";
        try{
            $manga = Manga::find($id);
            $manga->delete();
            return redirect('/listerMangas');
        } catch (Exception $ex) {
            $erreur=$ex->getMessage();
            return redirect('/listerMangas');
        }
    }
    
    public function updateManga($id){
        $erreur = Session::get('erreur');
        Session::forget('erreur');
        $manga = Manga::find($id);
        $genres=Genre::all();
        $dessinateurs=Dessinateur::all();
        $scenaristes=Scenariste::all();
        $titreVue="Modification d'un manga";
        //Affiche le formulaire en lui fournissant les données à afficher
        return view ('formManga', compact('manga', 'genres', 'dessinateurs', 
                        'scenaristes', 'titreVue', 'erreur'));
    }
    
    
    public function validateManga()
    {
        $id_manga = Request::input('id_manga');
        
        //liste des champs à vérifier
        $regles = array(
            'titre'=>'required',
            'prix'=>'required | numeric',
            'cbScenariste'=>'required',
            'cbGenre'=>'required',
            'cbDessinateur'=>'required'
        );
        //message d'erreur personalisé
        $messages = array(
            'titre.required' => 'Il faut saisir un titre',
            'cbGenre.required' => 'Il faut selectionner un genre',
            'cbScenariste.required' => 'Il faut selectionner un scénariste',
            'cbDessinateur.required' => 'Il faut selectionner un dessinateur',
            'prix.required' => 'Il faut saisir un prix',
            'prix.numeric' => 'Le prix doit etre une valeur numérique'
        );
        
        $validator = Validator::make(Request::all(),$regles, $messages);
        if($validator->fails()){
            if($id_manga>0){
                return redirect ('modifierManga/' .$id_manga)
                        ->withErrors($validator)
                        ->withInput();
            }else{
                return redirect ('ajouterManga/')
                        ->withErrors($validator)
                        ->withInput();
            }
        }
                
        
    }

}
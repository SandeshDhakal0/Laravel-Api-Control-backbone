<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Petition;
use App\Http\Resources\PetitionResource;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Petition::all();
        // return PetitionResource::collection($data);
        return new AuthorCollection(Author::all());

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

}

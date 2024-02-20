@extends('master')


<h3>Mostrando el album  {{$album->id}}</h3>
<h3>Nombre: {{$album->name}}</h3>
<h3>Año de lanzamineto: {{$album->year}}</h3>
<h3>Artista: {{$album->artist_id}}</h3>
<h3>Numero de canciones del album: {{$album->songs->count()}}</h3>



@extends('master')


<h1>Listado de Canciones</h1>


<table>
  <thead>
  <tr>
    <th>Nombre</th>
    <th>Duración</th>
    <th>Orden en el album</th>
    <th>Nombre del album</th>
    <th>Nombre del artista</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    @foreach($songs as $song)
      <tr>
        <td>{{$song->name}}</td>
        <td>{{$song->duration}}</td>
        <td>{{$song->order}}</td>
        <td>{{$song->album_id}}</td>
        <td></td>
      </tr>
    @endforeach
  </tbody>
</table>

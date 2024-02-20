@extends('master')


<h1>Listado de artistas</h1>


<table>
  <thead>
  <tr>
    <th>Nombre</th>
    <th>Álbumes</th>
    <th>Numero de álbumes</th>
    <th>Numero de canciones</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    @foreach($artists as $artist)
      <tr>
        <td>{{$artist->name}}</td>
        {{-- "{{ route('albums', ['artist_id' => $artist->id]) }}" --}}
        <td><a href="">Albumes del artista</a></td>
        <td>{{$artist->albums->count()}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

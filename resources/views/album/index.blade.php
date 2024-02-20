@extends('master')

<h1>Listado de álbumes</h1>

<table>
  <thead>
  <tr>
    <th>Nombre</th>
    <th>Año de lanzamiento</th>
    <th>Nombre del artista</th>
    {{-- Enlace para ver canciones del album --}}
    <th>Canciones del album</th>
    <th>Numero de canciones</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    @foreach($albums as $album)
      <tr>
        <td>{{$album->name}}</td>
        <td>{{$album->year}}</td>
        <td>{{$album->artist_id}}</td>
        <td>{{$album->songs->count()}}</td>
        <td>
            <form action="{{route('albums.destroy',$album)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" style="background-color:  rgb(255, 135, 135); border-radius: 10px; padding: 2px" value="Eliminar">
            </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

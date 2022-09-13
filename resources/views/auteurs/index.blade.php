la listes des auteurs 
<div class="all">
 @foreach ($auteurs as $auteur)
 <div>
    <h5> {{ $auteur->nom }} </h5>
    <h6>{{ $auteur->nationalite }} </h6>
    <h6> {{ $auteur->urlphoto }} </h6>
   </div>
   {{-- livres
   @foreach ($auteur->livres as $livre)
      <ul>
        <li> {{ $livre->titre }} </li>
    </ul> 
   @endforeach
   <hr> --}}
 @endforeach
</div>
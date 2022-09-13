Liste  des livres de l'auteur : {{ $auteur->nom }} 
<div class="all">
 @forelse ($liv as $livre)
 <div>
    <h5> {{ $livre->titre }} </h5>
    <h6>{{ $livre->description }} </h6>
    <h6> {{ $livre->urlphoto }} </h6>
   </div>
   <hr>  
 @empty
   ilya pas des livres  
 @endforelse 

</div>
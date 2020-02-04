<ul>
  @foreach( $user->agent->listings as $listing )
  <li>{{$listing->title}}</li>
  @endforeach
</ul>

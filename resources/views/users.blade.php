@section('content')
   
<h2>Users</h2>
   <ul>
    @foreach ( $users as $user )
        <li>
            {{ $user->firstname}}
        </li>
         @endforeach
   </ul>
@endsection
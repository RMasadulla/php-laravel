<h1>This is about page</h1>
<h1>{{$user}}</h1>

<br>
<div>
{{$users[0]}}
</div>


<br>
<div>
    @if($user === "asadulla")
        <h3>this is Asadulla</h3>
    @elseif($user === "rahat")
        <h3>this is Rahat</h3>
    @else($user === "kabir")
        <h3>Other user</h3>
    @endif
</div>


<br>
<div>
   @foreach ($users as $singleUser)
      <ul>
        <li>{{$singleUser}}</li>
      </ul>
   @endforeach
</div>

<br>
<div>
   @for ($i = 0; $i <= 10; $i++)
       <h2>{{ $i }}</h2>
   @endfor
</div>

<x-message-alert  class="success" message="welcome to about page."/>
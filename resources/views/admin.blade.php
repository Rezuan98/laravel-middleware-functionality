<h1> Admin Dashboard</h1>
<br> <br><br><br>
@if (session('email'))

{{session('email')}} <br>
    
@endif
<a href="{{url('/logout')}}">logout</a>
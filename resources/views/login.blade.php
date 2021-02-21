
@include('header')
<h1>Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter name" > <br>  
    <input type="password" name="password" placeholder="enter password" > <br>  
    <button type="submit">Login </button>


</form>
@include('footer')
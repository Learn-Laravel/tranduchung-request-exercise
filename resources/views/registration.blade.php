<form action="/getdata" method="POST">
    @csrf
  
    <div>
        <p>Name</p>
        <input type="text" name="name" >
    </div>
    
    <div> 
        <p>Username</p>
        <input type="text" name="username" >
    </div>
    
    
    <div>
        <p>Password</p>
        <input type="password" name="password">
    </div>
    <button type="submit">Register</button>
</form>
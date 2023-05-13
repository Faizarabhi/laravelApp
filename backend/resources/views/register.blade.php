

  

        <div class="card-body">
            <form method="POST" action="{{ route('store') }}">
                @csrf
  <div class="container">
  <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter User Name" name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
   
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">register</button>
  
  </div>

 
</form>
    </div>


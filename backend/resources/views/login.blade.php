

  

        <div class="card-body">
            <form method="POST" action="{{ route('connect') }}">
                @csrf
    


  <div class="container">
      <label for="email"><b>Email</b></label>

      <input type="text" placeholder="Enter Email" name="email" required>
      
      @error('email')
      {{$message}}
      @enderror
     
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <a href="{{ url('/login/google') }}" class="btn btn-google-plus"> Google</a>
    <button type="submit">Login</button>
  
  </div>

 
</form>
    </div>


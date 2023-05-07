

    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <a href="{{ url('/login/google/callback') }}" class="btn btn-google">
                <i class="fa fa-google"></i> Sign in with Google
                </a>
             
                
            </form>
        </div>
    </div>


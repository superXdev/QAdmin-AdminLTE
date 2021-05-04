<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>
        
        <x-slot name="title">
            <a href="" class="h1"><b>Admin</b>LTE</a>
        </x-slot>
        <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <x-input-group type="email"  name="email" text="Email" icon="envelope" />

        <x-input-group type="password"  name="password" text="Password" icon="lock" />
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </x-auth-card>
</x-guest-layout>

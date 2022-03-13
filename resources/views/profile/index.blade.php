<x-app-layout>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('profile')}}">Cupid-Knot</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->first_name}}</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/profile">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-dropdown-link>
                </form>
            </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profiles, matched with your profile</h2>
          <p>Check out here</p>
        </div>

        <div class="row">
          @foreach($users as $user)
          @php 
            $currentYear = date("Y");
            $userBirthYear = date('Y', strtotime($user->birthday));
          
          @endphp
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
          <div class="card" style="width: 18rem;">
            <img src="http://mor.productions/wp-content/uploads/2015/01/dummy-icon.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$user->first_name}} {{$user->last_name}}</h5>
                <span class="details" style="margin: bottom 0px; display:block; ">Occupation: {{$user->occupation}}</span>
                <span class="details" style="margin: bottom 0px; display:block; ">Age: {{$currentYear-$userBirthYear}} Years</span>
                <span class="details" style="margin: bottom 0px; display:block; ">Income: {{$user->income}} PA</span>
                <span class="details" style="margin: bottom 0px; display:block; ">Family Type: {{$user->family_type}}</span>
                <span class="details" style="margin: bottom 0px; display:block; ">Is Manglik: {{$user->manglik}}</span>
                <a href="#" class="btn btn-primary mt-2">Send Message</a>
            </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>
</x-app-layout>

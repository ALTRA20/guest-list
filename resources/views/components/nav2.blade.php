<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/nav/nav2.css')}}">
<nav>
  <ul>
    <a href="/" class="home" style="display: block;">
    	<li>
	      <div class="home-icon">
	        <div class="roof">
	          <div class="roof-edge"></div>
	        </div>
	        <div class="front"></div>
	      </div>
    	</li>
    </a>
    <a class="work" href="/data">
	    <li>
	      <div class="work-icon">
	        <div class="paper"></div>
	        <div class="lines"></div>
	        <div class="lines"></div>
	        <div class="lines"></div>
	      </div>
	    </li>
    </a>
    <a class="logout" href="/logout">
	    <li>
	      <div class="mail-icon" style="margin-left: -10px; color: white; ">
	       <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
				  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
				  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
				</svg>
	      </div>
	    </li>
    </a>
  </ul>
</nav>
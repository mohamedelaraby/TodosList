<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
    <div class="container">
        <a class="navbar-brand" href="/" >TodoList</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active': ''}}">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item {{Request::is('about') ? 'active': ''}}">
                    <a class="nav-link" href="/about" >About</a>
                </li>

                <li class="nav-item {{Request::is('contact') ? 'active': ''}}">
                    <a class="nav-link" href="/contact" >Contact Us</a>
                </li> 
                
                
            </ul>
        </div>
</div>
</nav>


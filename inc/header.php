<nav class="navbar navbar-default navbar-fixed-top">        <div class="navbar-header">          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">            <span class="sr-only">Navigatie</span>            <span class="icon-bar"></span>            <span class="icon-bar"></span>            <span class="icon-bar"></span>          </button>          <a class="navbar-brand" href="/new/index.php"><img id="logomenu" src="img/wabble-logo.jpg" alt="wabble"></a>        </div>        <div id="navbar" class="navbar-collapse collapse">          <ul class="nav navbar-nav navbar-right">            <li><a href="/new/index.php">Home</a></li>            <li><a href="/new/over-ons">Over ons</a></li>			<li><a href="/new/websites">Websites</a></li>            <li><a href="/new/applicaties">Applicaties</a></li>            <li class="hvr-forward"><a href="/new/offerte">Offerte aanvragen</a></li>          </ul>        </div><!--/.nav-collapse -->    </nav><script>    // Navbar and dropdowns    var toggle = document.getElementsByClassName('navbar-toggle')[0],        collapse = document.getElementsByClassName('navbar-collapse')[0];    // Toggle if navbar menu is open or closed    function toggleMenu() {        collapse.classList.toggle('collapse');        collapse.classList.toggle('in');    }    // Close all dropdown menus    function closeMenus() {        for (var j = 0; j < dropdowns.length; j++) {            dropdowns[j].getElementsByClassName('dropdown-toggle')[0].classList.remove('dropdown-open');            dropdowns[j].classList.remove('open');        }    }    // Close dropdowns when screen becomes big enough to switch to open by hover    function closeMenusOnResize() {        if (document.body.clientWidth >= 768) {            closeMenus();            collapse.classList.add('collapse');            collapse.classList.remove('in');        }    }    // Event listeners    window.addEventListener('resize', closeMenusOnResize, false);    toggle.addEventListener('click', toggleMenu, false);</script>
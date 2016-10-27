<?php
  include "templates/master.inc.php";
  function content(){
?>
	<div class="row">
	  <div class="col-sm-6">
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-film"></span> Film Programme</button>
        <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Book Tickets</button>
	  </div>
	  <div class="col-sm-6">
		<img src="https://placekitten.com/700/400" class="img-responsive" alt="Kitten Image">
	  </div>
	</div>
    <div class="row">
        <div class="col-sm-4">
            <h3 class="text-center">Best Worst Movie (2009)</h3>
            <p>This documentary reviews the making of the fild "Troll 2", from the perspective of its child artist Michael.</p>
        </div>
        <div class="col-sm-4">
            <h3 class="text-center">Movie Suggestion</h3>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="title" class="col-sm-4 control-label">Movie Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="title" placeholder="Movie Title">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Subscribe for Schlocktoberfest Newsletter <small>Once a month.</small>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-6 col-sm-6">
                  <button type="submit" class="btn btn-primary">Suggest Movie</button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-sm-4">
            <h3 class="text-center">Our Sponsors</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
<?php
  }
?>
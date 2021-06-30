<form method="POST" action="{{ action('controlController@store') }}">
						<input type="hidden" name="requestName" value="searchbox"/>
                        <input type="text" name="search" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="submit" class="btn btn-default" type="button">search</button>
                        </form>
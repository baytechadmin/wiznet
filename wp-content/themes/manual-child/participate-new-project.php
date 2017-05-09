<?php

/**
 * Template Name: Participate new Project
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="create-project">
	<div class="container">
		<div class="row">
			<form class="participateprojectnew">
				<div class="part1">
					<h4>Basic Information *</h4>
					<label>Project Name *</label>
					<input type="text" name=""  pattern="" title="">
					<label>Representative Image *</label>
					<input type="file" name=""  pattern="" title="">
					<label>Implementation Ideas *</label>
					<textarea cols="12" rows="12"></textarea>
					<label>Classification</label>
					<select>
						<option>Aumation</option>
						<option>Cloud</option>
						<option>Gateway</option>
						<option>IOT</option>
					</select>
					<label class="oslabel">O/S</label>
					<input type="text" name=""  pattern="" title="">
					<label class="cloudlabel">Cloud</label>
					<input type="text" name=""  pattern="" title="">

					<div class="col-xs-12 col-sm-12 btn-wrap">
	  					<div class="row">
	  						<button type="button" class="btn btn-default">Save Progress</button>
  							<button type="button" class="btn btn-default">Next Step</button>
	  					</div>
  						
  					</div>
				</div>

				<div class="part2">
					<h4>Main Parts *</h4>
					<div class="checkbox checkthum">
						<img src="/wp-content/uploads/2017/04/u193.png" alt="">
						<label>
							<input type="checkbox" value="">
							WIZwiki-W7500
						</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
					</div>
					<div class="checkbox checkthum">
						<img src="/wp-content/uploads/2017/04/u193.png" alt="">
						<label>
							<input type="checkbox" value="">
							WIZwiki-W7500
						</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
					</div>
					<div class="checkbox checkthum">
						<img src="/wp-content/uploads/2017/04/u193.png" alt="">
						<label>
							<input type="checkbox" value="">
							WIZwiki-W7500
						</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
					</div>
					<div class="col-xs-12 col-sm-12 btn-wrap">
					<div class="row">
						<button type="button" class="btn btn-default">Save Progress</button>
  						<button type="button" class="btn btn-default pull-right">Previous Step</button>
						<button type="button" class="btn btn-default">Next Step</button>
					</div>			
  					</div>
				</div>

				<div class="part3">
					<h4>Parts *</h4>
					<select>
						<option></option>
					</select>
					<input type="text" name=""  pattern="" title="">
					<input type="text" name=""  pattern="" title="">
					
					<div class="col-xs-12">
						<div class="row">
							<button type="button" class="btn btn-default pull-right">Next Step</button>
						</div>
						
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						
					
						<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Classfication</th>
						        <th>Part Name</th>
						        <th>Parts Link</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td></td>
						        <td></td>
						        <td></td>
						      </tr>
						      <tr>
						        <td></td>
						        <td></td>
						        <td></td>
						      </tr>
						      <tr>
						        <td></td>
						        <td></td>
						        <td></td>
						      </tr>
						    </tbody>
						  </table>
						 </div>
					</div>
					<div class="col-xs-12 col-sm-12 btn-wrap">
						<div class="row">
	  						<button type="button" class="btn btn-default">Save Progress</button>
	  						<button type="submit" class="btn btn-default">Submit</button>	
	  						<button type="button" class="btn btn-default pull-right">Previous Step</button>	
						</div>		
  					</div>
				</div>

				<div class="part4">
					<h4>Team</h4>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							I'm posting this projects on behalf of someone else
						</label>
					</div>
					<div class="col-xs-12">
						<div class="row">
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>User</th>
						        <th>Permission</th>
						        <th>Contribution</th>
						        <th>Status</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>Robert Liu</td>
						        <td>
							        <select>
							        	<option>manage</option>
							        </select>
						        </td>
						        <td><textarea cols="3" rows="3"></textarea></td>
						        <td>Member</td>
						      </tr>
						      <tr>
						      <td>
							        <select class="form-control">
							        	<option>Select a user</option>
							        </select>
						        </td>
						        <td>
							        <select>
							        	<option>manage</option>
							        </select>
						        </td>
						        <td><textarea cols="3" rows="3"></textarea></td>
						        <td>Not Saved</td>
						      </tr>
						      <tr>
						      	<td>
						      		<button type="button" class="btn btn-success">Add a member</button>
						      	</td>
						      </tr>
						    </tbody>
  						</table>
						<label>Team URL</label>
						<input type="text" value="">
						<label>Pretty URL</label>
						<input type="text" value="">
  						</div>
					</div>
					<div class="col-xs-12 col-sm-12 btn-wrap">
						<div class="row">
	  						<button type="button" class="btn btn-default">Save Progress</button>
							<button type="button" class="btn btn-default">Next Step</button>	
						</div>			
  					</div>
				</div>
				
				<div class="part5">
					<h4>Contest Info *</h4>
					<label>Summary (Summarize the main points of this project in 2 - 3 lines) *</label>
					<textarea cols="12" rows="8"></textarea>
					<label>Content (Picrtures can be sued in the text, videos and sources are used as below seperately) *</label>
					<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
			  		<script>tinymce.init({ selector:'textarea.abc' });</script>
			  		<textarea class="abc">Next, get a free TinyMCE Cloud API key!</textarea>
			  			
			  		<label>Be sure to add the main source code (github, blog, etc)</label>
			  		<div class="col-xs-12 btn-groupetc">
			  			<div class="row">
			  			<button type="button" class="btn btn-default pull-left">Delete</button>
			  			<input type="text" name="" id="input" class="form-control" value="rober liu" pattern="" title="">
			  			<button type="button" class="btn btn-default pull-right">Add</button>
			  			</div>
			
			  		</div>
			  		<label>Be sure to include the video URL (YouTube, Vimeo, etc)</label>
			  		<div class="col-xs-12 btn-groupetc">
			  			<div class="row">
			  			<button type="button" class="btn btn-default pull-left">Delete</button>
			  			<input type="text" name="" id="input" class="form-control" value="rober liu" pattern="" title="">
			  			<button type="button" class="btn btn-default pull-right">Add</button>
			  			</div>
			
			  		</div>
			  		<div class="col-xs-12 col-sm-12 btn-wrap">
			  			<div class="row">
  						<button type="button" class="btn btn-default">Save Progress</button>
  						<button type="button" class="btn btn-default">Preview</button>
  						<button type="submit" class="btn btn-default pull-right">Submit</button>	
  						<button type="button" class="btn btn-default ">Previous Step</button>
						
						</div>		
  					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>
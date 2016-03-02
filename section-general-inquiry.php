				<hr>

					<div id="form-messages"></div>

					<h4 class="desktop-only text-center">Basic Information</h4>
					<div class="row large-pt">
						<div class="small-12 large-4 columns">
							<p><label>Name
								<input id="name" name="name" type="text" value="<?php get_data("name"); ?>">
							</label></p>
						</div>
						<div class="small-12 large-4 columns">
							<p><label>Phone Number
								<input id="phone" name="phone" type="tel" value="<?php get_data("phone"); ?>">
							</label></p>
						</div>
						<div class="small-12 large-4 columns">
							<p><label>Email Address
								<input id="email" name="email" type="email" value="<?php get_data("email"); ?>">
							</label></p>
						</div>
					</div>
					<hr class="desktop-only">
					<div class="row large-pt">
						<div class="small-12 large-centered large-8 columns">
							<p class="large-text-center"><label class="large-text">How Can We Help You? <span class="subtext-block subtext">Let us know what type of work conditions, styles, etc you prefer.</span>
								<textarea name="comments" id="comments">
									<?php get_data("comments"); ?>
								</textarea>
							</label></p>
							<p class="text-center"><button class="button" type="submit" name="submit" id="submit" value="Send" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?>>Submit</button></p>
						</div>
					</div>
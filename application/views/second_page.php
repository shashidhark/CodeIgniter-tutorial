		<div id="body" align="center" style="width:100%">
			<div>
					<h3>TODO List</h3>
					<?php echo validation_errors(); ?>
					
						<?php echo form_open('second_page/save'); ?>
						
						Topic:
						<?php echo form_input('topic'); ?>
						<br />
						
						Date:
						<?php echo form_input('date'); ?>
						<br />
						
						<?php echo form_submit('submit', 'Add topic'); ?>
						<br />
						
						<?php echo form_close();?>
						<br />
			</div>
		</div>


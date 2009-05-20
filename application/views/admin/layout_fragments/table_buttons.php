<? if(isset($buttons) && is_array($buttons)): ?>
	
	<div class="buttons spacer-top">
		
		<? foreach($buttons as $button ): ?>
		
			<? if( $button == 'save' ): ?>
			<div class="float-left">
				<button type="submit" name="btnAction" value="save" class="button">
					<strong>
						Save
						<img class="icon" alt="" src="<?=image_url('admin/icons/accepted_48.png');?>" />
					</strong>
				</button>
			</div>
			
			<? elseif( $button == 'cancel' ): ?>
			<div class="float-left">
				<a href="<?=site_url('admin/'.$module.'/index');?>" class="button width-7">
					<strong>
						Cancel
						<img class="icon" alt="Cancel" src="<?=image_url('admin/icons/cancel_48.png');?>"/>
					</strong>
				</a>
			</div>
			
			<? elseif( $button == 'delete' ): ?>
			<div class="float-left">
				<button type="submit" name="btnAction" value="delete" class="button confirm">
					<strong>
						Delete
						<img class="icon" alt="Delete selected" src="<?=image_url('admin/icons/cross_48.png');?>" />
					</strong>
				</button>
			</div>
		
			<? elseif( $button == 'activate' ): ?>
			<div class="float-left">
				<button type="submit" name="btnAction" value="activate" class="button">
					<strong>
						Activate
						<img class="icon" alt="" src="<?=image_url('admin/icons/accepted_48.png');?>" />
					</strong>
				</button>
			</div>
		
			<? elseif( $button == 'publish' ): ?>
			<div class="float-left">
				<button type="submit" name="btnAction" value="publish" class="button">
					<strong>
						Publish
						<img class="icon" alt="" src="<?=image_url('admin/icons/accepted_48.png');?>" />
					</strong>
				</button>
			</div>
		
			<? elseif( $button == 'upload' ): ?>
			<div class="float-left">
				<button type="submit" name="btnAction" value="upload" class="button">
					<strong>
						Upload
						<img class="icon" alt="" src="<?=image_url('admin/icons/box_upload_48.png');?>" />
					</strong>
				</button>
			</div>
			<? endif; ?>
			
		<? endforeach; ?>
		<br class="clear-both" />
		
	</div>
<? endif; ?>
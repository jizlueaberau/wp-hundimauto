<?php
/**
 * 
 * Partial to render Modal Video HTML parts
 * 
 * @link https://codepen.io/JacobLett/pen/xqpEYE
 */
?><!-- Video Modal -->
<div class="modal modal-xl fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Hundetreppen</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- 16:9 aspect ratio -->
				<div class="ratio ratio-4x3">
					<iframe class="embed-responsive-item" src="" id="modal-video-frame" allowscriptaccess="allways" allow="autoplay"></iframe>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schliessen</button>
			</div>
		</div>
	</div>
</div>
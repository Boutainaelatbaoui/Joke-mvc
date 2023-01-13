<div class="modal fade" id="modal-joke">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../jokeForm/controller.php" method="POST" id="form-joke">
					<div class="modal-header">
						<h5 class="modal-title">Add New Joke</h5>
						<button type="button" class="btn-close" data-dismiss="modal"></button>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input  type="hidden" name="id" id="joke-id">
							<div class="mb-3">
								<label class="form-label">Text</label>
								<input type="text" class="form-control" name="text" id="joke-text"/>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="update" class="btn btn-warning" id="joke-update-btn">Update</a>
						<button type="submit" name="save" class="btn btn-primary" id="joke-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
</div>
<script src="../assets/js/main.js"></script>
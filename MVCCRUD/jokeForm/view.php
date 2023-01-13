<div class="modal fade" id="modal-joke">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add New Joke</h5>
						<button type="button" class="btn-close" data-dismiss="modal"></button>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input  type="hidden" name="task-id" id="task-id">
							<div class="mb-3">
								<label class="form-label">Text</label>
								<input type="text" class="form-control" name="title" id="task-title"/>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-register">
          <div class="form-group">
            <label for="name">Firstname</label>
            <input type="text" class="form-control" ng-model="firstName" >
          </div>
          <div class="form-group">
            <label for="name">Middlename</label>
            <input type="text" class="form-control" ng-model="middleName" >
          </div>
          <div class="form-group">
            <label for="name">Lastname</label>
            <input type="text" class="form-control" ng-model="lastName" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="addUser()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-register">
          <div class="form-group">
            <label for="name">Firstname</label>
            <input type="hidden" ng-model="eid">
            <input type="text" class="form-control" ng-model="efirstName" >
          </div>
          <div class="form-group">
            <label for="name">Middlename</label>
            <input type="text" class="form-control" ng-model="emiddleName" >
          </div>
          <div class="form-group">
            <label for="name">Lastname</label>
            <input type="text" class="form-control" ng-model="elastName" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="updateUser()">Update changes</button>
      </div>
    </div>
  </div>
</div>
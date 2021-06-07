<!-- ======= Login and Register Modals ======= -->
<div id="myModal" class="modal fade">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action="/examples/actions/confirmation.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
              </div>
              <a data-dismiss="modal" aria-label="Close" href="#myModal2" data-toggle="modal">Register</a><br>
              <a aria-label="Close" href="ownsAShop.php">Own a shop?</a>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Register</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action="/examples/actions/confirmation.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="firstName" placeholder="First Name" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="lastName" placeholder="Last Name" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
              </div>
              <hr class="mt-2 mb-3" />
              <div class="col-xs-12">
                <p class="mb-2">Password requirements</p>
                <p class="small text-muted mb-2">To create a new password, you have to meet all of the following
                  requirements:</p>
                <ul class="small text-muted pl-4 mb-0">
                  <li>Minimum 8 character</li>
                  <li>At least one special character</li>
                  <li>At least one number</li>
                  <li>Can’t be the same as a previous password</li>
                </ul>
              </div>
              <div class="form-group pt-2">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="retypePassword" placeholder="Retype Password"
                  required="required">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
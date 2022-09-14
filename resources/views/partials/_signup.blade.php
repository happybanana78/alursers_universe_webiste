<!-- signup -->
<div class="modal fade mt-5 fs-4" id="signup_form" tabindex="-1" aria-labelledby="signup_form" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content px-3">
    <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form id="signupF" action="/register">
            @csrf
            <div class="mb-3">
                <label for="username_s" class="form-label">Username</label>
                <input type="email" class="form-control" id="username_s" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email_s" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email_s" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password_s" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_s" name="password" required>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light fs-4" form="signupF">Sign Up</button>
    </div>
    </div>
</div>
</div>
<!-- endsignup -->
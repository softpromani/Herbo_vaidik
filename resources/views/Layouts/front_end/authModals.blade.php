 <!-- login start -->
 <div class="pa-login-model">
    <div class="modal fade" id="loginModel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="pa-login-title">Login</h1>
                    <form>
                        <div class="pa-login-form">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <div class="pa-remember">
                                <label>Remember Me
                                    <input type="checkbox">
                                    <span class="s_checkbox"></span>
                                </label>
                                <a href="javascript:;" class="pa-forgot-password" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal" aria-label="Close">Forgot Password ?</a>
                            </div>
                            <div class="pa-login-btn">
                                <button class="pa-btn">Login</button>
                                <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end -->
<!-- signup start -->
<div class="pa-login-model pa-signup-modal">
    <div class="modal fade" id="signUpModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h1 class="pa-login-title">Signup</h1>
                <form>
                    <div class="pa-login-form">
                        <input type="text" placeholder="Username">
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                        
                        <div class="pa-login-btn">
                            <button class="pa-btn">Sign up</button>
                            <p>Already have an account? <a href="javascript:;" data-toggle="modal" data-target="#loginModel" data-dismiss="modal" aria-label="Close">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- signup end -->
<!-- forgot start -->
<div class="pa-login-model pa-forgot-modal">
    <div class="modal fade" id="forgotModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="pa-login-title">Forgot Password</h1>
                    <form>
                        <div class="pa-login-form">
                            <input type="text" placeholder="Email">
                            <div class="pa-login-btn">
                                <button class="pa-btn">Forgot</button>
                                <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forgot end -->
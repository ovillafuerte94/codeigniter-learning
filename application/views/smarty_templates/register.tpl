{extends file='layouts/app.tpl'}

{block name=content}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Register</h2>

                        {if $CI->session->flashdata('error')}
                            <div class="alert alert-danger">
                                {$CI->session->flashdata('error')}
                            </div>
                        {/if}

                        {form_open('register')}
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        {form_close()}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
{include 'head.tpl'}

<body>

    {include 'header.tpl'}

    <main class="container mt-3">

        <!-- Mostrar el formulario de edición -->
        <div class="mt-5 w-25 mx-auto">
            <form method="POST" action="verify">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                {if $error}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                {/if}
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>

    </main>

    {include 'footer.tpl'}

</body>

</html>
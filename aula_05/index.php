<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
<script src="js/scripts.js"></script>
    
    <div class="container">
        <form action="processa.php" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" required/>
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="senha" required/>
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
                </div>

                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <input type="submit" value="Sign in" class="btn btn-primary btn-block mb-4"> 
            <!-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button> -->

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
</body>
</html>

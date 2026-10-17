<?php
include "db.php";
session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    
    $course_name = $_POST["course_name"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];

    $sql = $conn->prepare("insert into courses(course_name,description,duration) values (?,?,?)");
    $sql -> bind_param("sss",$course_name,$description,$duration);

    if($sql->execute()){
        header("Location:dashboard.php");
    }
}

?>



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">Hello User</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Course</a>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <a
                                name=""
                                id=""
                                class="btn btn-success "
                                href="pdf.php"
                                role="button"
                                >Export Data</a
                            >
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="logout.php"
                                role="button"
                                >Logout</a
                            >
                            
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>

        <h2 class="text-center mt-3">Add Course</h2>
        
        <div
            class="container col-9"
        >
            
            <div
                class="container mt-3 border rounded shadow p-3 col-5"
            >
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Course Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="course_name"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Enter course name"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input
                            type="text"
                            class="form-control"
                            name="description"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Duration</label>
                        <input
                            type="text"
                            class="form-control"
                            name="duration"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    
                    
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                    
                </form>
            </div>
            



        
            
        </div>
        
            



        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>




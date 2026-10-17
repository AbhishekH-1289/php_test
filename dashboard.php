<?php
include "db.php";
session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $results = $conn-> query("select * from courses;");
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
                                <a class="nav-link" href="add_course.php">Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view.php#">View Course</a>
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

        <h2 class="text-center mt-3">Dashboard</h2>
        
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img
                        src="holder.js/900x500/auto/#777:#555/text:First slide"
                        class="w-100 d-block"
                        alt="First slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="holder.js/900x500/auto/#666:#444/text:Second slide"
                        class="w-100 d-block"
                        alt="Second slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="holder.js/900x500/auto/#666:#444/text:Third slide"
                        class="w-100 d-block"
                        alt="Third slide"
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        

        <div
            class="container col-9"
        >
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary rounded border shadow"
                >
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Action 1</th>
                            <th scope="col">Action 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rows=$results->assoc()){?>
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td><?=rows["course_name"]?></td>
                            <td><?=rows["description"]?></td>
                            <td><?=rows["duration"]?></td>
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="edit.php?id=<?php rows["id"]?>"
                                role="button"
                                >Button</a
                            >
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="delete.php?id=<?php rows["id"]?>"
                                role="button"
                                >Button</a
                            ></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
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




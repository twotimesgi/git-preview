<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Fogli di stile -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><h2>Gitpreview v1.0</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Generate Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contribute on GitHub</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </nav>
        <div class="w-100  bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-light text-center p-1 mb-0">Made for Booleaners by a Booleaner💙
                    </p>
                </div>
            </div>
        </div>
    </div>
    </header>
    <main class="pb-5">
        <section class="pt-5">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="card p-4">
                            <p>
                                This website serves raw files directly from Github with proper Content-Type headers.                          
                            </p>
                            <form method="GET" action="preview.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="url" placeholder="Github file url"
                                    aria-label="Github file url" aria-describedby="button-addon2" required>
                                <button class="btn btn-primary" type="submit"
                                    id="button-addon2">Generate preview</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  Why is this necessary?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    When you request a file from source control hosting services, they are usually served (in the case of JavaScript, HTML, CSS, and some other file types) with a Content-Type of text/plain. As a result, most modern browsers won't actually interpret it as JavaScript, HTML, or CSS.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Is GitPreview associated with any of the supported hosting services?                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    No, this website is not associated with them in any way. Please don't contact their support asking for help with this website. They'll give you a weird look and back away slowly.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    I have feedback or want to report a bug! Who can I contact?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    To report a critical issue send me a letter. I try to respond quickly when I'm awake and near a computer, but sometimes I do have to sleep. To report a non-critical bug, please file an issue.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
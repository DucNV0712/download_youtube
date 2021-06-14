<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
    <link rel="stylesheet" href="../../download_url/views/libs/fontawesome-free-5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../../download_url/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../download_url/views/css/Home.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center ">
    <div class="card col-6 p-0">
        <div class="card-header pb-0 border-0">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-success active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Thumbnails</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-success" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Videos & Audio</button>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!--                Download Thumbnail              -->
                    <div class="card border-0">
                        <form action="?route=Download-Thumbnails" method="post">
                        <h5 class="text-center  text-success fw-bold border-0 bg-transparent card-header">Download Thumbnails</h5>
                        <div class="card-body">
                            <div class="mb-3 field-thumbnail">
                                <label for="url" >paste video or images url:</label>
                                <input id="url" type="text" class="Url-Thumbnail form-control mt-2" placeholder="@url" aria-label="Url" required>
                                <input id="url" name="imgUrl" type="hidden" class="url-hidden" >

                            </div>
                            <div class="col-12 preview-Thumbnail d-flex justify-content-center align-items-center  rounded-3">
                                <img class="thumbnail" src="" alt="preview">
                                <i class="fas fs-1 text-success fa-cloud-download-alt"></i>

                            </div>

                        </div>
                        <div class="card-footer text-center bg-transparent border-0 ">
                            <button name="download_thumbnails" type="submit" class="btn btn-success col-12">Download Thumbnails</button>
                        </div>
                        </form>
                    </div>
                </div>

                <!--                Download Video            -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card border-0">

                            <h5 class="text-center text-success fw-bold border-0 bg-transparent card-header">Download Video & Audio</h5>
                            <div class="card-body">
                                <div class="mb-3 field-video">
                                    <label for="url" >paste video url:</label>
                                    <input id="url" type="text" class="Url-Video form-control mt-2" placeholder="@url" aria-label="Url" required>

                                </div>
                                <div class="col-12 preview-videoThumbnails d-flex justify-content-center align-items-center  rounded-3">
                                    <img class="thumbnail-video" src="" alt="preview">
                                    <i class="fas fs-1 text-success fa-cloud-download-alt"></i>

                                </div>
                                <div class="input-group mt-3 mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    <select class="form-select selectQuality" id="inputGroupSelect01" required>
                                        <option selected disabled>Select Video Formate</option>
                                        <option value="mp3">Mp3</option>
                                        <option value="mp4a">144 Mp4</option>
                                        <option value="360">360 Mp4</option>
                                        <option value="480">480 Mp4</option>
                                        <option value="720">720 Mp4</option>
                                        <option value="1080">1080 Mp4</option>
                                        <option value="4k">4k Mp4</option>
                                        <option value="8k">8k Mp4</option>
                                    </select>
                                </div>
                                <div class="col-12 infoVideo">
                                    <button  type="submit" class="btn btn-success btn-downloadVideo col-12">Search</button>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../download_url/views/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="../../download_url/views/libs/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../../download_url/views/js/index.js"></script>
<script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</body>
<script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

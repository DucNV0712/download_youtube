//download thumbnail
const urlField = document.querySelector(".field-thumbnail .Url-Thumbnail"),
    previewThumbnail = document.querySelector(".preview-Thumbnail"),
    imgTag =previewThumbnail.querySelector(".thumbnail"),
    urlHidden = document.querySelector(".url-hidden");
//download video
const urlFieldVideo = document.querySelector(".field-video .Url-Video"),
    previewThumbnailVideo = document.querySelector(".preview-videoThumbnails"),
    imgTagVideo =previewThumbnailVideo.querySelector(".thumbnail-video");

//download thumbnail
    urlField.onkeyup = () => {
    let imgUrl = urlField.value;
    previewThumbnail.classList.add("active");
    if (imgUrl.indexOf("https://www.youtube.com/watch?v=") !== -1){
    let vidID = imgUrl.split("v=")[1].substring(0,11);
    imgTag.src = `https://img.youtube.com/vi/${vidID}/maxresdefault.jpg`;
    }else if(imgUrl.indexOf("https://youtu.be/") !== -1){
        let vidID = imgUrl.split("be/")[1].substring(0,11);
        imgTag.src = `https://img.youtube.com/vi/${vidID}/maxresdefault.jpg`;
    }else if (imgUrl.match(/\.(jpe?g|png|bmp|webp)$/i)){
        imgTag.src =imgUrl;
    }else {
        imgTag.src = "";
        previewThumbnail.classList.remove("active");
    }
    urlHidden.value = imgTag.src;
}
//download video
urlFieldVideo.onkeyup = () => {
    let  videoUrl = urlFieldVideo.value;
    previewThumbnailVideo.classList.add("activeVideo");
    if (videoUrl.indexOf("https://www.youtube.com/watch?v=") !== -1){
        let vidID = videoUrl.split("v=")[1].substring(0,11);
        imgTagVideo.src = `https://img.youtube.com/vi/${vidID}/maxresdefault.jpg`;
    }else if(videoUrl.indexOf("https://youtu.be/") !== -1){
        let vidID = videoUrl.split("be/")[1].substring(0,11);
        imgTagVideo.src = `https://img.youtube.com/vi/${vidID}/maxresdefault.jpg`;
    } else {
        imgTagVideo.src = "";
        previewThumbnailVideo.classList.remove("activeVideo");
    }
}
$(".btn-downloadVideo").click(function (){
    let linkVideo = urlFieldVideo.value;
    console.log(linkVideo)
    let selectQuality = $(".selectQuality").children("option:selected").val();
    console.log(selectQuality)
    let src = ""+linkVideo+"="+selectQuality+"";
    downloadVideo(linkVideo,selectQuality);
});
    function downloadVideo(linkVideo,selectQuality){
        $('.infoVideo').html('<iframe class="rounded-3" style="width:100%;height:60px;border:0;overflow:hidden;"  src="https://loader.to/api/button/?url='+linkVideo+'&f='+selectQuality+'"></iframe>')
    }

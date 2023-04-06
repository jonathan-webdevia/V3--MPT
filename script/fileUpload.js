let fileInput = document.querySelector("#fileUpload input");
let formInput = document.querySelector("#fileUploadContainer");
let formSubmit = document.querySelector("#selectImgSubmit");

fileInput.addEventListener("change", () => {
  formSubmit.click();
})


formInput.addEventListener("submit", (event) => {

  event.preventDefault();

  var data = new FormData(formInput);

  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    // console.log(this);
    if (this.readyState == 4 && this.status == 200) {
      if(xhr.response[0][200]) {
        formInput.style.backgroundImage = 'url(./file/upload/'+this.response[0][200]+')';
      } else if(!xhr.response[0][200]) {
      }
    }
  };

  xhr.open("POST", "./back/phpJs/uploadFile.php?type=travel", true);
  xhr.responseType = "json";
  xhr.send(data);

  console.log(xhr);

  return false;



});
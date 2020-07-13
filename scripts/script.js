$(document).ready(function () {
    var myImage = document.getElementById('profile_image');
    var firstName = document.getElementById('h_first');
    var position = document.getElementById('s_position');
    var fB = document.getElementById('fb_icon');
    var instaGram = document.getElementById('insta_icon');
    var linkedin = document.getElementById('link_icon')
    var fname = ["Alankrit Verma","Gaurav Mishra","Rishav Mehta","Aditi Singh","Shubham Goenka","Mugdha Agarwal"]
    var positionq = ["President","Secretary","Vice-President","Joint Secretary","Treasurer","Asst. Treasurer"]
    var imageArray = ["/image/team 2019-20/Alankrit Verma.jpg", "/image/team 2019-20/IMG-20181124-WA0053-01.jpeg", "/image/team 2019-20/IMG-20200712-WA0053.jpg", "/image/team 2019-20/Aditi.jpg", "/image/team 2019-20/Shubham Goenka.jpg","/image/team 2019-20/MugdhaRa.jpg"]
    var fb = ["https://www.facebook.com/alankrit.verma.180","https://www.facebook.com/mishrajeegaurav/","https://www.facebook.com/ricky.mclaren.9","https://www.facebook.com/AditiSingh5s","https://www.facebook.com/shubham.goenka.7906","https://www.facebook.com/mugdha.agrawal.714"]
    var insta = ["https://www.instagram.com/alankrit3008juhi/","https://www.instagram.com/mishrajeegaurav/","https://www.instagram.com/rvrishav7/","https://www.instagram.com/aditisingh_5/","https://www.instagram.com/goenka_shubh/","https://www.instagram.com/agrawal_mugdha98/"]
    var linkedIn = ["https://www.linkedin.com/in/alankrit-verma-7b65b21b2","https://www.linkedin.com/in/gaurav-mishra-18bba717a","https://www.linkedin.com/in/rishav-kumar-15081998","none","https://www.linkedin.com/in/subham-goenka-15a794197","https://www.linkedin.com/in/mugdha-agrawal-984028165"]
    var imageIndex = 0;

    $(".licons").click(function(){
        if (imageIndex == 0) {
            imageIndex = 5;
        }else {
            imageIndex--;
        }
        myImage.setAttribute("src",imageArray[imageIndex]);
        position.textContent = positionq[imageIndex]
        firstName.innerHTML = fname[imageIndex]
        fB.setAttribute("href",fb[imageIndex])
        instaGram.setAttribute("href",insta[imageIndex])

        if(linkedIn[imageIndex]=="none"){
            linkedin.classList.add("none");
        }else{
            linkedin.classList.remove("none");
            linkedin.setAttribute("href", linkedIn[imageIndex]);
        }
    })

    $(".ricons").click(function(){
        if (imageIndex == 5){
            imageIndex = 0;
        }else {
            imageIndex++
        }
        myImage.setAttribute("src",imageArray[imageIndex]);
        firstName.innerHTML = fname[imageIndex]
        position.innerHTML = positionq[imageIndex]
        fB.setAttribute("href",fb[imageIndex])
        instaGram.setAttribute("href",insta[imageIndex])

        if(linkedIn[imageIndex]=="none"){
            linkedin.classList.add("none");
        }else{
            linkedin.classList.remove("none");
            linkedin.setAttribute("href", linkedIn[imageIndex]);
        }
    })
})
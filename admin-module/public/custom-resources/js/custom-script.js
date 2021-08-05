// this is for small image icon menu 





// tabs js
document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;
  
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  }


  //tabs js ends

  //modal code
  $(document).ready(
    function(){
      // modal code
      $('.modal-cross-btn').click(function(){
        $('.modal-wrapper').css({"visibility":"hidden"});
        $('#body-wrapper').removeClass('body-wrapper');
      });

      

    }//ready function

  );




    
     //image processing code
        function showImg(post_id, img_id){
            
            var im = $('#img-'+post_id+'-'+img_id);
            console.log("images");
            console.log(im);
            //get the parent
            var parent = im.parents('#mpu-'+post_id);
            console.log("parent");
            console.log(parent);
            //get all the image under parent...clicked image's siblings
            img_array = parent.find('img');
            console.log("images array");
            console.log(img_array);
            //find the index of current image and source
            var curr_img_src = $('#img-'+post_id+'-'+img_id).attr('src');

            //display the current image
            //change image appropriately on next and prev button


            //blur background and show image in modal
            $('.modal-wrapper').css({"visibility":"visible"});
            $('#body-wrapper').addClass('body-wrapper');

            //show current image
            $('#modal-img').attr('src',curr_img_src);
            
            $('.prev_btn').click(function(){
              if(img_id > 0){
                img_id--;
              }
              else{
                //disable prev button
              }
              changeImg();
            });

            $('.next_btn').click(function(){
              if(img_id < img_array.length){
                img_id++;
              }
              else{
                //disable next btn
              }

              changeImg();
            });
            
           
            

            function changeImg(){
              curr_img_src = $("#img-0-"+img_id).attr('src');
              $('#modal-img').attr('src',curr_img_src);
            }
            

            
            


            //find parent a = $('#img-2').parents('#mpu-1')
            //get childrens images img_array = a.find('img')
            //getting src of first image img_array[0].src
            //search for current clicked image index
            // var i;var ind;
            // for (i = 0; i < img_array.length; i++) {
            //   if(img_array[i].id=='img-2'){ind=i;}
            // }


        }//function end
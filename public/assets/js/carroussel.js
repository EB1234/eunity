$(function () {
                   $('#myCarousel').carousel({
                       interval:5000,
                       pause: "false"
                   });
                   $('#playButton').click(function () {
                       $('#myCarousel').carousel('cycle');
                   });
                   $('#pauseButton').click(function () {
                       $('#myCarousel').carousel('pause');
                   });
               });
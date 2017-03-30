// Instead of giving images unique ID's, I handled changing the image src by altering the String for src, appending either -large.jpg or -filtered.jpg

$(document).ready(function() {
    
    // Global variable for the video
    var video = document.getElementById("video");
 
    $(".catImage").mouseover(function(event) {
        // Object targeted
        var catObject = event.target;
        // Takes original path and changes it to filtered path
        var orgPath = catObject.src;
        var newPath = orgPath.replace(".jpg", "-filtered.jpg");
        catObject.src = newPath;
        // Changes back from filtered path on mouseout
        onmouseout = function() {
            catObject.src = orgPath;
        }
    });
    
    // Only works on anchors within an audio box, this assumes the anchors within audio boxes only have one child element (the audio file)
    $('[class^="audioBox"] a').click(function(event){
        var targetAnchor = event.target;
        var audioFile = targetAnchor.firstElementChild;
        audioFile.play();
    });
    
    // Turns down opacity when class "expand" is clicked and reverts when clicked again, turns off and hides video
    $(".expand").click(function(event) {
        // Opacity
        $("#container").css({opacity: 0.2});
        
        // Pause and hide video in case it is still playing 
        video.pause();
        $("#video").css('visibility', 'hidden');  
        
        // Get large image path
        var imageObject = event.target;
        var newPath = imageObject.src.replace(".jpg", "-large.jpg");
        
        // Create img object, set popup background to this img, make popup visible
        var img = new Image();
        img.onload = function() {
            $("#popupContainer").css('background-image', 'url(' + newPath + ')');
            $("#popupContainer").css('visibility', 'visible');
            $("#popupContainer").css("width", this.width + "");
            $("#popupContainer").css("height", this.height + "");
            
            // Calculation dimensions
            var popupDiv = document.getElementById("popupContainer");
            var divW = parseInt(popupDiv.style.width);
            var divH = parseInt(popupDiv.style.height);
            var winW = parseInt(window.innerWidth);
            var winH = parseInt(window.innerHeight);
            
            // New values
            var newL = (winW/2) - (divW/2) + $(window).scrollLeft();
            var newT = (winH/2) - (divH/2) + $(window).scrollTop();
            
            // Set new left and top
            $("#popupContainer").css("left", newL);
            $("#popupContainer").css("top", newT);
            
        }
        img.src = newPath;
    });
    
    // Revert after clicking popup
    $("#popupContainer").click(function(event) {
        $("#container").css({opacity: 1});
        $("#popupContainer").css('visibility', 'hidden'); 
        video.pause();
        $("#video").css('visibility', 'hidden');  
    }); 
    
    // Video popup
    $("#playNyan").click(function() {
        
        // Eliminate previous background image and make sure poup is visible
        $("#popupContainer").css('background-image', 'none'); 
        $("#popupContainer").css('visibility', 'visible'); 
        
        // Make sure video is visible
        $("#video").css('visibility', 'visible'); 
        
        // Calculate dimensions
        var divW = parseInt(video.width);
        var divH = parseInt(video.height);
        var winW = parseInt(window.innerWidth);
        var winH = parseInt(window.innerHeight);
        
        // New values
        var newL = (winW/2) - (divW/2) + $(window).scrollLeft();
        var newT = (winH/2) - (divH/2) + $(window).scrollTop();
            
        // Set new left and top
        $("#popupContainer").css("left", newL);
        $("#popupContainer").css("top", newT);
        
        // Load and play video
        video.load();
        video.play();
        
    });
    
});


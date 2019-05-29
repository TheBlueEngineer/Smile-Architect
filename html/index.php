<!--************-->
<!--** HEADER **-->
<!--************-->
<?php 
    $title = "Smile Architect: Acasa";
    $message = "Bine ati venit !";
    include ('./header.php');
?>

<!--***************-->
<!--** INDEX.PHP **-->
<!--***************-->
<!--********************************************************************************************-->

        <!--*************************************-->
        <!--** INTRODUCTION TO CURRENT WEBSITE **-->
        <!--************************************************************************************-->
        <div class="tab">
            Acasa
        </div>

        <div class="text-container">
            <div class="text-block">
                <span>Title 1</span>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum urna non dolor lobortis, sit amet tristique magna viverra. Curabitur eu leo sit amet mauris dapibus porttitor. Aliquam vel feugiat orci. Nulla ultrices nisi in nunc venenatis iaculis. Proin tincidunt diam magna, in hendrerit est congue non. Integer blandit facilisis purus, a iaculis ipsum dictum a. Vivamus quis gravida enim. In felis ipsum, feugiat vel felis non, tempus blandit tortor. Maecenas faucibus sagittis efficitur. Curabitur enim mauris, congue sit amet arcu nec, malesuada rhoncus augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum urna non dolor lobortis, sit amet tristique magna viverra. Curabitur eu leo sit amet mauris dapibus porttitor. Aliquam vel feugiat orci. Nulla ultrices nisi in nunc venenatis iaculis. Proin tincidunt diam magna, in hendrerit est congue non. Integer blandit facilisis purus, a iaculis ipsum dictum a. Vivamus quis gravida enim. In felis ipsum, feugiat vel felis non, tempus blandit tortor. Maecenas faucibus sagittis efficitur. Curabitur enim mauris, congue sit amet arcu nec, malesuada rhoncus augue.
            </div>

            <div class="text-block">
                <span>Title 2</span>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum urna non dolor lobortis, sit amet tristique magna viverra. Curabitur eu leo sit amet mauris dapibus porttitor. Aliquam vel feugiat orci. Nulla ultrices nisi in nunc venenatis iaculis. Proin tincidunt diam magna, in hendrerit est congue non. Integer blandit facilisis purus, a iaculis ipsum dictum a. Vivamus quis gravida enim. In felis ipsum, feugiat vel felis non, tempus blandit tortor. Maecenas faucibus sagittis efficitur. Curabitur enim mauris, congue sit amet arcu nec, malesuada rhoncus augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum urna non dolor lobortis, sit amet tristique magna viverra. Curabitur eu leo sit amet mauris dapibus porttitor. Aliquam vel feugiat orci. Nulla ultrices nisi in nunc venenatis iaculis. Proin tincidunt diam magna, in hendrerit est congue non. Integer blandit facilisis purus, a iaculis ipsum dictum a. Vivamus quis gravida enim. In felis ipsum, feugiat vel felis non, tempus blandit tortor. Maecenas faucibus sagittis efficitur. Curabitur enim mauris, congue sit amet arcu nec, malesuada rhoncus augue.
            </div>
        </div>

        <!--******************-->
        <!--** TESTIMONIALS **-->
        <!--************************************************************************************-->
        <div class="tab">
            Testimoniale
        </div>

        <!--***************-->
        <!--** SLIDESHOW **-->
        <!--************************************************************************************-->
        <!--SLIDESHOW-->
        <div id="slideshow_container">
            <!-- SLIDE 1 -->
            <div class="slide fade active">
                <img src="../images/common/slideshow/1.png">
            </div>

            <!-- SLIDE 2 -->
            <div class="slide fade">
                <img src="../images/common/slideshow/2.png">
            </div>

            <!-- SLIDE 3 -->
            <div class="slide fade">
                <img src="../images/common/slideshow/3.png">
            </div>

            <!-- SLIDE 4 -->
            <div class="slide fade">
                <img src="../images/common/slideshow/4.png">
            </div>
        </div>
            <!-- Dot buttons -->
        <div id="slideshow-dot-container">
            <div class="dot" onclick="currentSlide(1)"></div>
            <div class="dot" onclick="currentSlide(2)"></div>
            <div class="dot" onclick="currentSlide(3)"></div>
            <div class="dot" onclick="currentSlide(4)"></div>
        </div>

<!--************-->
<!--** FOOTER **-->
<!--************-->
<?php
    include './footer.php';
?>
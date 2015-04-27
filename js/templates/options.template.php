<script type="text/template" id="backgroundOption">
    <div class="backgroundsContainer">
        <div data-background="red" class="bg"></div>
        <div data-background="black" class="bg"></div>
        <div data-background="white" class="bg"></div>
        <div data-background="blue" class="bg"></div>
        <div data-background="yellow" class="bg"></div>
        <div data-background="pink" class="bg"></div>
    </div>
    <div class="clear"></div>
    <p class="uppercase">
        kliknij w miniaturkę by zobaczyć podgląd.
    </p>
</script>

<script type="text/template" id="textOption">
    <div class="uppercase clear marginTop">
        <div class="title">napis</div>
        <input id="textToAdd" type="text">
        <a href="#" id="addText" class="uppercase">Dodaj</a>
    </div>
    <div class="uppercase marginTop">
        <div class="title">czcionka</div>
        <select class="form-control" id="fontType">
            <option>Arial</option>
            <option>Courier New</option>
            <option>Times New Roman</option>
        </select>
    </div>
    <div class="uppercase marginTop">
        <div class="title">kolor</div>
        <select class="form-control" id="colorType">
            <option>red</option>
            <option>blue</option>
            <option>white</option>
        </select>
    </div>
    <div class="uppercase marginTop">
        <div class="title">rozmiar</div>
        <div class="mySlider marginTop" data-max="36" data-slide="textSizeValue"></div> 
        <span id="textSizeValue">1</span>
    </div>
    <div class="uppercase marginTop">
        <div class="title">obrót</div>
        <div class="mySlider" data-max="360" data-slide="rotationValue"></div> 
        <span class="sliderPadding" id="rotationValue">1</span>
    </div>
    <div class="uppercase marginTop">
        <div class="title">styl</div>
        <select class="form-control" id="fontStyle">
            <option>serif</option>
            <option>sans-serif</option>
            <option>monospace</option>
            <option>cursive</option>
            <option>fantasy</option>
        </select>
    </div>
</script>


<script type="text/template" id="logoOption">
    <div class="uppercase clear marginTop">
        <div class="title">logo</div>
        <span class="btn fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Select files...</span>
            <input id="fileupload" type="file" name="files[]" multiple>
        </span>
        <a href="#" class="changeScreen uppercase">Dodaj</a>
    </div>
    <div class="uppercase clear marginTop">
        <div class="title">rozmiar</div>
        <div class="mySlider marginTop" id="sizeLogoSlider"></div> 
        <span class="myValue" id="sizeLogoValue">0</span>
    </div>
    <div class="uppercase clear marginTop">
        <div class="title">obrót</div>
        <div class="mySlider" id="rotateLogoSlider"></div> 
        <span class="myValue" id="rotateLogoValue">0</span>
    </div>
    <div class="clear"></div>
    <p class="uppercase">
        pamiętaj możesz dodać kilka grafik. klikając ją na podglądzie możesz zmienić jej parametry.
    </p>
</script>

<script type="text/template" id="saveOption">
    <div class="saveBox uppercase">
        <span class="askTitle"> nie zapisałeś karty. czy napewno chcesz wyjść?</span>
        <a href="#" class="changeScreen">tak</a>
        <a href="#" class="changeScreen">nie</a>
    </div>
</script>
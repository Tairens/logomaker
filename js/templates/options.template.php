<script type="text/template" id="backgroundOption">
    <div class="backgroundsContainer">
        <div data-background="red" data-type="bgcolor" class="bg"></div>
        <div data-background="black" data-type="bgcolor" class="bg"></div>
        <div data-background="white" data-type="bgcolor" class="bg"></div>
        <div data-background="blue" data-type="bgcolor" class="bg"></div>
        <div data-background="yellow" data-type="bgcolor" class="bg"></div>
        <div data-background="pink" data-type="bgcolor" class="bg"></div>
        <div data-background="/images/tlo1.jpg" data-type="bgimage" class="bg"></div>
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
        <span class="myValue" id="textSizeValue">0</span>
    </div>
    <div class="uppercase marginTop">
        <div class="title">obrót</div>
        <div class="mySlider" data-max="360" data-slide="rotationValue"></div> 
        <span class="myValue" id="rotationValue">0</span>
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
            <span>Wybierz plik...</span>
            <input type="file" />
        </span>
        <a href="#" id="addImage" class="changeScreen uppercase">Dodaj</a>
    </div>
    <div class="uppercase clear marginTop">
        <div class="title">rozmiar</div>
        <div class="mySlider marginTop" data-slide="sizeLogoSlider"></div> 
        <span class="myValue" id="sizeLogoSlider">0</span>
    </div>
    <div class="uppercase clear marginTop">
        <div class="title">obrót</div>
        <div class="mySlider" data-max="360" data-slide="rotateLogoSlider"></div> 
        <span class="myValue" id="rotateLogoSlider">0</span>
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
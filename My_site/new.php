<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>

    .anim{
        margin: auto; 
        height:400px; 
        padding: 0px 250px; 
        border: 2px inset rgba(0, 0, 0, 0.6); 
        display: flex; 
        justify-content: space-around;
    }

    .ball1{
        top: 0;
        width:50px; 
        height: 50px; 
        background-color: lightgrey; /* For browsers that do not support gradients */
        background-image: radial-gradient(circle, lightgrey, grey); 
        border-radius: 100px;
        animation-name: ball1;
        animation-duration: 2s;
        animation-timing-function: ease;
        position: relative;
        animation-iteration-count: infinite;
        cursor: pointer;
        animation-play-state: paused;
    }   
    .ball2{
        top: 0;
        width:50px; 
        height: 50px; 
        background-color: lightgrey; /* For browsers that do not support gradients */
        background-image: radial-gradient(circle, lightgrey, grey); 
        border-radius: 100px;
        animation-name: ball2;
        animation-duration: 2s;
        animation-timing-function: ease;
        position: relative;
        animation-iteration-count: infinite;
        cursor: pointer;
        animation-play-state: paused;
    }
    .ball3{
        top: 0;
        width:50px; 
        height: 50px; 
        background-color: lightgrey; /* For browsers that do not support gradients */
        background-image: radial-gradient(circle, lightgrey, grey); 
        border-radius: 100px;
        animation-name: ball3;
        animation-duration: 2s;
        animation-timing-function: ease;
        position: relative;
        animation-iteration-count: infinite;
        cursor: pointer;
        animation-play-state: paused;
    }

    #pp{
        width: 300px;
        height: 60px;
        color: #6ccccc;
        border: 3px solid #6ccccc;
        border-radius: 10px;
        background-color: white;
        font-size: 30px;
        transition: .5s;
    }

    #pp:hover{
        border: 3px solid white;
        background-color: #6ccccc;
        color: white;
    }

    i.fa-solid.fa-arrow-right{
        transform: rotate(-90deg);
        font-size: 28px;
        width: 50px;
        border-radius: 100%;
        height: 50px;
        border: 3px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        background: whitesmoke!important;
        position: absolute;
        top: -46px;
        right: -29px;
    }
    
    @keyframes ball1{
        0%{ top:0 }

        40%{ top:350px}

        50%{ top:350px }
        
        100%{ top:0; height:50px }
    }   
    @keyframes ball2{
        0%{ top:0 }

        35%{ top:350px}

        45%{ top:350px }
        
        100%{ top:0;height:50px }
    }   
    @keyframes ball3{
        0%{ top:0 }

        30%{ top:350px}

        40%{ top:350px }
        
        100%{ top:0;height:50px }
    }
}
    

<!-- 

                <div class="col-8 mx-auto">
                    <div class="anim">
                        <div class="ball1"></div>
                        <div class="ball2"></div>
                        <div class="ball3"></div>
                    </div>
                        <button id="pp" class="m-3 mx-auto d-block">Play</button>
                    </div>

                </div> -->
</body>
</html>
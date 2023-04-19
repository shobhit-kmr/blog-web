<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="btn">button 1</button>
    <button class="btn">button 2</button>
    <button class="btn">button 3</button>
    <button class="btn">button 4</button>
</body>
<script>
    let buttons = document.querySelectorAll(".btn");
        for(let i =0; i < buttons.length; i++){
          buttons[i].addEventListener("click", function(){
            alert(this.innerText + " hello");
            console.log("hii");
          });
        }
    </script>
</html>
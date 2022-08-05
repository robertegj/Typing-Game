<!DOCTYPE html>
<html>
    <head>
        <title>Rob's typing game</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            body {
                text-align: center;
            }
            #typingForm {
                border: 2px solid white;
            }
            .wrong {
                animation: angry-wiggle 0.2s 3;
            }
            @keyframes angry-wiggle{
                0%   {border: 2px solid white;background: white;}
                50%  {border: 2px solid red;  background: red;margin-right: 10px;}
                100% {border: 2px solid white;background: white;}
        }
        </style>
    </head>
    <body>
        <p>Rob's typing game</p>
        <h2>Current word:</h2>
        <h1 id="currentWord"></h1>
        <form id="typingForm">
            <input id="typedWord" type="text"  autofocus/>
            <input type="submit" />
        </form>
	wordList = ["words"];
            function rollWord() {
                document.getElementById("currentWord").innerText = wordList[Math.floor(Math.random()*wordList.length)];
            }
            rollWord();

            function handleForm(event) { 
                event.preventDefault(); 
                document.getElementById("typingForm").classList.remove("wrong");

                var userInput = document.getElementById("typedWord").value;
                var currentWord = document.getElementById("currentWord").innerText;

                if(userInput == currentWord){
                    document.getElementById("typedWord").value = "";
                    rollWord();
                } else {
                    document.getElementById("typingForm").classList.add("wrong");
                }
            } 
            document.getElementById("typingForm").addEventListener('submit', handleForm);

        </script>
    </body>

</html>

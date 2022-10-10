<!DOCTYPE HTML>
<HTML>
    <head>
        <style>
            html {
                background-color: lightgray;
                width: 100%;
                height: 100%;
            }

            body {
                background-color: white;
                width: 50%;
                height: 100%;
                margin-left: 10%;
                margin-right: 10%;
                align-content: center;
                border: 1px solid black;
            }

            .smile {
                margin-left: 10%;
                margin-right: 10%;
                width: 90%;
            }

            .button {
                border: none;
                width: 20%;
                padding: 8px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-left: 10%;
                margin-right: 10%;
                cursor: pointer;
                color: black;
            }
            
             .textarea {
                 margin-left: 10%;
                 margin-right: 10%;
                 width: 80%;
            }

        </style>
    </head>
    <body>
            <form action="foto.php" method="post">
                <div class="smile">
                    <label>
                        <input type="radio" name="smiley" value=":)" checked>
                        <img src="../GYO-systeem/images/VerySda.png" alt="smile" width="100px" height="100px">
                    </label>
                    <label>
                        <input type="radio" name="smiley" value=":)" checked>
                        <img src="../GYO-systeem/images/Sad.png" alt="smile" width="100px" height="100px">
                    </label>
                    <label>
                        <input type="radio" name="smiley" value=":)" checked>
                        <img src="../GYO-systeem/images/Moderate.png" alt="smile" width="100px" height="100px">
                    </label>
                    <label>
                        <input type="radio" name="smiley" value=":)" checked>
                        <img src="../GYO-systeem/images/Happy.png" alt="smile" width="100px" height="100px">
                    </label>
                    <label>
                        <input type="radio" name="smiley" value=":)" checked>
                        <img src="../GYO-systeem/images/VeryHappy.png" alt="smile" width="100px" height="100px">
                    </label>
                </div>
                <h2 class="textarea">Comment:</h2>
                <textarea class="textarea"></textarea>
                <button class="button">submit</button>
            </form>
    </body>

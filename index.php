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
                margin-left: auto;
                margin-right: auto;
                width: 90%;
            }

            .button {
                border: none;
                padding: 8px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                color: black;
            }
             .textarea {
               width: 40%;
            }

        </style>
    </head>
    <body>
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
            <div>
                <textarea class="textarea"> </textarea>
            <div class="button">
                <button class="button">submit</button>
            </div>
    </body>

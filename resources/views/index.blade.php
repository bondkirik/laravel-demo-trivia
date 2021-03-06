<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

</head>
<body>
<div class="wrapper">
    <div class="container">
        <div id="q_block" class="q-count">
            <span>Q:</span>
            <b id="q_number">1</b>
        </div>
        <div class="trivia">
            <div class="question-text" id="question"></div>
            <div class="option-container" id="result">
            </div>
            <div class="next-question-btn">
                <button id="btn" type="button" class="btn">SUBMIT</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>



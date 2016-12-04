<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SideComment.js Web Designer Tutorial</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/side-comments.css" rel="stylesheet">
    <link href="css/themes/default-theme.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Web Designer 227</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Set User</button>
            </form>
        </div>
    </div>
</div>

<div class="container commentable-area">
    <div class="row">
        <div class="col-md-10">
            <h2>Heading</h2>
            <p data-section-id="1" class="commentable-section">Don't underestimate the Force. Partially, but it also obeys your commands. I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- I have traced the Rebel spies to her. Now she is my only link to finding their secret base.</p>
            <p data-section-id="2" class="commentable-section">You mean it controls your actions? Escape is not his plan. I must face him, alone. Don't underestimate the Force. He is here. She must have hidden the plans in the escape pod. Send a detachment down to retrieve them, and see to it personally, Commander. There'll be no one to stop us this time! A tremor in the Force. The last time I felt it was in the presence of my old master.</p>
            <p data-section-id="3" class="commentable-section">You're all clear, kid. Let's blow this thing and go home! I find your lack of faith disturbing. Still, she's got a lot of spirit. I don't know, what do you think? Still, she's got a lot of spirit. I don't know, what do you think? Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. She must have hidden the plans in the escape pod. Send a detachment down to retrieve them, and see to it personally, Commander. There'll be no one to stop us this time!</p>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/side-comments.js"></script>
<script>
    $(document).ready(function(){
        var SideComments = require('side-comments');
        var currentUser =
            {
                id: 1,
                avatarUrl: "http://placepic.me/starwars/100-100",
                name: "Obi Wan"
            };
        var existingComments = [];
        window.sideComments = new SideComments('.commentable-area', currentUser, existingComments);
    });
</script>
</body>
</html>